<?php
/**
 * @desc 视图对象，将作用域集中到view中
 * @author jackson
 * @date 2012/3/22
 */
define('PV_VERSION', '20150719');
define('MIN_LIMIT', 10);
define('USE_MINIFY', FALSE);

class Mx_PageView  extends Mx_CI{

    /**
     * @var 视图单页文件位置
     */
    protected $singlePath= '';

    /**
     * @var 主题文件位置
     */
    protected $themePath	= '';

    /**
     * @var 视图Block文件位置，页面片段
     */
    protected $blockPath	= '';

    /**
     * @var block集合
     */
    protected $blockMaps	= array();

    /**
     * @var blockHtml
     */
    protected  $blockHtmls   = array();

    /**
     * @var 页面的Javascript
     */
    protected $jsHeaders	= array();
    protected $jsFunctions	= array();
    protected $loadedJs 	= array();//记录已经打印的js

    /**
     * @var 页面的Css
     */
    protected $cssHeaders	= array();
    protected $loadedCss 	= array();//记录已经打印的css

    /**
     * @var 缓存的作用域变量
     */
    protected $cacheData    = array();

    /**
     * 初始化主题及页面block路径
     */
    public function __construct(){

        $viewPath = APPPATH . 'views/';

        //自动获取方法路径
        $this->singlePath = $viewPath;
        //$this->singlePath	=  $viewPath. 'singles/';
        $this->themePath	=  $viewPath .'themes/';
        $this->blockPath	=  $viewPath . 'dashboard/';
        //$this->blockPath = $viewPath;
    }


    ///////////////////////////////CORE START///////////////////////////////////////////////

    /**
     * getCurrentUrl
     * 获取当前URL
     * @access public
     * @return void
     */
    public function getCurrentUrl(){
        return Acl::$routes;
    }

    /**
     * getCurrentUser
     * 获取当前用户
     * @access public
     * @return void
     */
    public function getCurrentUser(){
        return $_SESSION['LoginName'];
    }

    /**
     * 向视图中传递变量
     * @param $key
     * @param $value
     */
    public function assign($key , $value){
        $this->cacheData[$key] = $value;
    }

    /**
     * 在主题中渲染，支持页面碎片拼装
     * @param  $blocks  mixed
     * @param  $data
     * @param  $elements
     */
    public function renderInTheme( $blocks  , $data = array() , $theme = 'default'){
        //访问控制器方法
        $CI = & get_instance();
        $themeFunc = $theme . 'ThemeVars';
        if( is_callable(array($CI , $themeFunc))){
            $themeVars = $CI->{$themeFunc}();
        }

        //合并主题变量
        //同名键值将由页面变量覆盖
        $this->cacheData = array_merge($this->cacheData , $data , $themeVars);

        //释放当前作用域
        extract($this->cacheData);


        //提供$blocks变量
        if( is_string( $blocks )){
            $this->blockMaps['content'] = $blocks ;
        }  else if( is_array($blocks)) {
            //二维合并
            $this->blockMaps = array_merge_recursive( $this->blockMaps , $blocks);
        }

        //缓存片段
        ob_start();
        foreach( $this->blockMaps as $blockKey => $blockView){

            if( is_string ($blockView )){
                $blockView = array( $blockView);
            }

            foreach($blockView as $bv){
                require $this->blockPath . $bv . EXT;
                $this->blockHtmls[$blockKey][] = ob_get_contents();
                ob_clean();
            }
        }

        //只加载block
        require $this->themePath . $theme . EXT;
        ob_end_flush();
    }

    /**
     *  加载单页
     * @param  $pageName
     * @param  $data
     */
    public function renderSingle($pageName , $data = array() ){
        //释放
        if(!empty($data)){
            $this->cacheData = array_merge($this->cacheData , $data);
        }
        extract($this->cacheData);
        ob_start();
        require $this->singlePath . $pageName . EXT;
        ob_end_flush();
    }

    /**
     *  加载单页
     * @param  $pageName
     * @param  $data
     */
    public function renderBlock($blockName , $data = array() ){
        //释放
        if(!empty($data)){
            $this->cacheData = array_merge($this->cacheData , $data);
        }
        extract($this->cacheData);
        ob_start();
        require $this->blockPath . $blockName . EXT;
        ob_end_flush();
    }

    ///////////////////////////////CORE END///////////////////////////////////////////////

    ///////////////////////////////////Block START//////////////////////////////////////////
    /**
     * 添加页面块路径
     * @alias  inc_block
     * @param  $blockName
     * @param  $blockPath
     */
    public function addBlock( $blockName , $blockPath){
        $this->blockMaps[$blockName][] = $blockPath;

        if( isset($this->blockMaps[$blockName])) {
            if( is_string($this->blockMaps[$blockName])){
                $this->blockMaps[$blockName] = array( $this->blockMaps[$blockName] , $blockPath);
                return;
            }

            $this->blockMaps[$blockName][] = $blockPath;
            return ;
        }
        $this->blockMaps[$blockName] = $blockPath;
    }

    /**
     *  获取block内容，总是共享了页面里面所有的变量
     *  @param $blockName
     *  @param $data
     */
    public function getBlock($blockName, $data = array()){
        if( isset($this->blockHtmls[$blockName])) {
            if( is_string($this->blockHtmls[$blockName])){
                return $this->blockHtmls[$blockName];
            }

            return implode('' , $this->blockHtmls[$blockName]);
        }

        if(  file_exists( $path =  $this->blockPath . $blockName . EXT)) {
            //释放
            if(!empty($data)){
                $this->cacheData = array_merge($this->cacheData , $data);
            }
            extract($this->cacheData);
            ob_start();
            require $path;
            $contents = ob_get_contents();
            ob_end_clean();
            return $contents;
        }
        return '';
    }
    ///////////////////////////////////Block END/////////////////////////////////////////////


    ///////////////////////////////////JS&CSS START//////////////////////////////////////////
    /**
     * 设置页面的头部 min格式  b=//&f=a.js,b.js
     * @param  $js
     */
    public function addJsHeaders($js = '' , $type='page'){
        $js = explode(',' , $js);
        foreach($js as $i){
            if( isset( $this->jsHeaders[$type][$i])){
                continue;
            }
            $this->jsHeaders[$type][$i]	= $i . '.js';
        }
    }

    /**
     * 扩展的js函数，加在app.init后面
     * @param  $js
     */
    public function addJsReadyFunction($js = ''){
        $js = explode(',' , $js);
        foreach($js as $i){
            if( isset( $this->jsFunctions[$i])){
                continue;
            }
            $this->jsFunctions[$i]	= $i ;
        }
    }

    /**
     * 设置页面的头部css min格式  b=//&f=a.css,b.css
     * @param  $css  mixed
     */
    public function addCssHeaders($css = '' , $type='page'){
        $css = explode(',' , $css);
        foreach($css as $c){
            if( isset( $this->cssHeaders[$type][$c])){
                continue;
            }
            $this->cssHeaders[$type][$c]	= $c . '.css';
        }
    }

    /**
     * 加载UI组件
     */
    public function addPlugins( $plugins , $type = 'page' ){
        $this->load->config('ui_plugins' , TRUE);
        $ps = $this->config->item('ui_plugins');

        $plugins = explode(',' , $plugins);
        foreach($plugins as $p){
            if( isset($ps[$p])){
                if( isset($ps[$p][0]) && !empty($ps[$p][0])){
                    $this->addJsHeaders($ps[$p][0] , $type);
                }

                if( isset($ps[$p][1]) && !empty($ps[$p][1])){
                    $this->addCssHeaders($ps[$p][1] ,$type);
                }
            }
        }
    }

    /**
     * 获取CssLink
     */
    public function getCssHeaders( $type = 'page'  ){


        if( ! empty($_) ){
            $cssHeaders = explode(',' , $_);
            foreach($cssHeaders as $k=>$i){
                $cssHeaders[$k]	= $i . '.css';
            }
        } else {
            if( empty( $this->cssHeaders[$type])){
                return;
            }
            $cssHeaders = $this->cssHeaders[$type];
            $this->cssHeaders[$type] = array();
        }

        //记录已经打印的js
        $unLoadedCss = array_diff($cssHeaders ,$this->loadedCss);
        $this->loadedCss = array_merge($this->loadedCss , $cssHeaders);


        $csses = '';
        if( USE_MINIFY){
            foreach($unLoadedCss as $css){
                $minis[] = strpos( $css , '/') === 0? trim($css ,'/') : 'css/'. $css;
                if( count($minis) == MIN_LIMIT){
                    $csses .= $this->_link_tag('min/b=assets&f=' . implode($minis , ',') . '&' .PV_VERSION);
                    $minis = array();
                }
            }
            if( !empty($minis)){
                $csses .= $this->_link_tag('min/b=assets&f=' . implode($minis , ',') . '&' .PV_VERSION);
            }
        } else{
            foreach($unLoadedCss as $css){
                $csses .= $this->_link_tag( (strpos( $css , '/') === 0? 'http://'.$_SERVER['HTTP_HOST'].'/static/' : 'static/css/') . $css . '?v=' . PV_VERSION);
            }
        }
        return $csses;
    }

    /**
     * 获取JsLink
     */
    public function getJsHeaders( $type = 'page' ,$useMinify = FALSE ){
        if( ! empty($_) ){
            $jsHeaders = explode(',' , $_);
            foreach($jsHeaders as $k=>$i){
                $jsHeaders[$k]	= $i . '.js';
            }
        } else {
            if( empty( $this->jsHeaders[$type])){
                return;
            }
            $jsHeaders = $this->jsHeaders[$type];
            $this->jsHeaders[$type]= array();
        }

        //记录已经打印的js
        $unLoadedJs = array_diff($jsHeaders ,$this->loadedJs);
        $this->loadedJs = array_merge($this->loadedJs , $jsHeaders);

        $jses = '';
        if( USE_MINIFY){
            foreach($unLoadedJs as $js){
                if( $js !== FALSE){
                    $minis[] = strpos( $js , '/') === 0? trim($js,'/'): 'js/' . $js;
                }
                if( count($minis) == MIN_LIMIT){
                    $jses .= $this->_script_tag('min/b=assets&f=' . implode($minis , ','). '&' .PV_VERSION);
                    $minis = array();
                }
            }

            if( !empty($minis)){
                $jses .= $this->_script_tag('min/b=assets&f=' . implode($minis , ',') . '&' .PV_VERSION);
            }
        }else{
            foreach($unLoadedJs as $js){
                $jses .= $this->_script_tag( (strpos( $js , '/') === 0? 'http://'.$_SERVER['HTTP_HOST'].'static': 'static/js/' ). $js . '?v=' . PV_VERSION);
            }
        }
        return $jses;
    }
    ///////////////////////////////////JS&CSS END//////////////////////////////////////////

    //CI patch
    private function _script_tag($src = '' )
    {
        $CI =& get_instance();

        $link = '';
        if ( strpos($src, '://') !== FALSE)
        {
            $link .= 'src="'.$src.'" ';
        }
        else
        {
            $link .= 'src="'.$CI->config->slash_item('base_url').$src.'" ';
        }
        return '<script type="text/javascript" ' . $link . '></script>';

    }

    private function _link_tag($href = '', $rel = 'stylesheet', $type = 'text/css', $title = '', $media = '', $index_page = FALSE)
    {
        $CI =& get_instance();

        $link = '<link ';

        if (is_array($href))
        {
            foreach ($href as $k=>$v)
            {
                if ($k == 'href' AND strpos($v, '://') === FALSE)
                {
                    if ($index_page === TRUE)
                    {
                        $link .= 'href="'.$CI->config->site_url($v).'" ';
                    }
                    else
                    {
                        $link .= 'href="'.$CI->config->slash_item('base_url').$v.'" ';
                    }
                }
                else
                {
                    $link .= "$k=\"$v\" ";
                }
            }

            $link .= "/>";
        }
        else
        {
            if ( strpos($href, '://') !== FALSE)
            {
                $link .= 'href="'.$href.'" ';
            }
            elseif ($index_page === TRUE)
            {
                $link .= 'href="'.$CI->config->site_url($href).'" ';
            }
            else
            {
                $link .= 'href="'.$CI->config->slash_item('base_url').$href.'" ';
            }

            $link .= 'rel="'.$rel.'" type="'.$type.'" ';

            if ($media	!= '')
            {
                $link .= 'media="'.$media.'" ';
            }

            if ($title	!= '')
            {
                $link .= 'title="'.$title.'" ';
            }

            $link .= '/>';
        }
        return $link;
    }

    ////////////////HTML帮助//////////////////
    /**
     * renderFirstNav
     * 渲染一级导航
     * @param  string  navType
     * @return {undefined}
     */
    public function getFirstNav($navType){
        $viewConfig = $_SESSION['uiNavs'];

        //	print_r($viewConfig);

        foreach($viewConfig['primaryNav'] as $_navType=>$navVal){
            //根据用户角色显示导航信息
            $class =  $_navType == $navType ?'active' : '';
            echo '<li class="'. $class .'"><a href="'.$navVal['url'].'"><i class="'.$navVal['iconCls'].' icon-large"></i> <span>'.$navVal['text'].'</span></a></li>';
        }
    }

    /**
     * renderSecondNav
     * 渲染二级导航
     * @param string navType
     * @return {undefined}
     */
    public function getSecondNav($navType){
        /*$routes = Acl::$nav2;*/
        $action = Acl::$routes;
        $viewConfig = $_SESSION['uiNavs'];

        foreach($viewConfig['secondaryNav'] as $u => $sn){

            if($sn['parent'] == $navType){

                //只显示角色能支配的菜单
                //二级节点
                if(strpos($u , '/') === FALSE){
                    //print_r('if3'.$u.'3');
                    $thirdNav = array();
                    foreach($viewConfig['secondaryNav'] as $tu => $tn){
                        if($tn['parent'] == $u){
                            $thirdNav[$tu] = $tn;
                        }
                    }
                    $class = in_array($action, array_keys($thirdNav)) ? 'active open' : '';
                    echo '<li class="'. $class .'"><a href="javascript:;"><i class="'.$sn['iconCls'].'"></i> <span class="title">'.$sn['text'].'</span><span class="selected"></span><span class="arrow "></span></a>';
                    //print_r($thirdNav);
                    if(!empty($thirdNav)){
                        if($class == 'active open')
                            echo '<ul class="sub-menu" style="display: block;">';
                        else
                            echo '<ul class="sub-menu" style="display: none;">';
                        foreach($thirdNav as $tu => $tn){
                            if(!isset($tn['hide']) || !$tn['hide'])
                            {
                                $class = $tu == $action ? 'active' : '';
                                echo '<li class="'. $class .'"><a href="'.$tn['url'].'"><span>'.$tn['text'].'</span></a></li>';
                            }
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
                }else{
                    //print_r('else');
                    $class = $u == $action ? 'active' : '';
                    //if(empty($sn['hidden']) ){
                    echo '<li class="'. $class .'"><a href="'.$sn['url'].'"><i class="'.$sn['iconCls'].'"></i><span class="title">'.$sn['text'].'</span><span class="arrow "></span></a></li>';
                    //}
                }
            }
        }
    }

    /**
     * getBreadcrumb
     * 获取导览列
     * @param string navType
     * @access public
     * @return string
     */
    public function getBreadcrumb($navType){
        $routes = Acl::$routes;
        $viewConfig = $_SESSION['uiNavs'];

//        print_r($navType);
//        print_r($viewConfig);

        //获取收
        $breadcrumb = '<li><i class="'.$viewConfig['primaryNav'][$navType]['iconCls'].'"></i>'.$viewConfig['primaryNav'][$navType]['text'].'<span class="divider"><i class="fa fa-angle-right"></i></span></li>';

        foreach($viewConfig['secondaryNav'] as $u => $sn){
            //一级导航
            if($sn['parent'] == $navType){
                //二级节点
                if(strpos($u , '/') === FALSE){
                    foreach($viewConfig['secondaryNav'] as $tu => $tn){
                        if($tn['parent'] == $u){
                            if($tu == $routes){
                                $breadcrumb .= '<li >'.$sn['text'].'<span class="divider"><i class="fa fa-angle-right"></i></span></li>';
                                $breadcrumb .= '<li >'.$tn['text'].'</li>';
                                break;
                            }
                        }
                    }
                }else{
                    if($u == $routes){
                        $breadcrumb .= '<li >'.$sn['text'].'</li>';
                        break;
                    }
                }
            }
        }
        echo $breadcrumb;
    }

    /**
     * getJsFunction
     * 放在app.init()后面跑动的js函数
     * @param string role
     * @access public
     * @return string
     */
    public function getJsReadyFunction(){
        if(is_array($this->jsFunctions))
        {
            foreach ($this->jsFunctions as $key => $value) {
                echo $value.';';
            }
        }
    }

    /**
     * getSelection
     * 获取选中的下拉菜单 注：下拉框的$array有两种，一种是页面固定的，一种是数据库拉取出来的，前者$is_follow为true
     * @param string navType
     * @access public
     * @return string
     */
    public function getSelection($array,$select_value,$is_follow = true){
        if($is_follow)
        {
            if(!in_array($select_value, $array))
                $array[] = $select_value;
            foreach ($array as $value) {
                $class = $value == $select_value ? 'selected="selected"' : '';
                echo '<option '.$class.'>'.$value.'</option>';
            }
        }
        else
        {
            foreach ($array as $key => $value) {
                $class = $value['id'] == $select_value ? 'selected="selected"' : '';
                echo '<option '.$class.' value='.$value['id'].'>'.$value['name'].'</option>';
            }
        }

    }


    /**
     * renderFirstNav
     * 渲染工具导航
     * @param  string  navType
     * @return {undefined}
     */
    public function getToolNav(){
        $viewConfig = $_SESSION['uiNavs'];
        foreach($viewConfig['toolNavs'] as $_navType=>$navVal){
            //根据用户角色显示导航信息
            echo '<li class="dropdown '.$navVal['class'].'"><a href="javascript:;" class="dropdown-toggle"><i class="'.$navVal['iconCls'].'"></i><span class="badge badge-default"></span></a><ul></ul></li>';
        }
    }

}
