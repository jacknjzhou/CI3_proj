<?php
/**
 * 扩展控制器对象及方法
 * @author jackson
 * @package  Matrix
 */
class Mx_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();

		//加载对象访问器
		require APPPATH . 'core/Mx_CI' . EXT;
		require APPPATH . 'core/Mx_JsonView' . EXT;
		require APPPATH . 'core/Mx_PageView' . EXT;

		//对象Model及Library自动加载器
		$this->model = new Mx_Model_Proxy();
		$this->library = new Mx_Library_Proxy();

		//加载两种返回对象
		$this->json = new Mx_JsonView();
		$this->page = new Mx_PageView();
	}

    /**
     * _themeVars 
     * 获取主题变量
     * @access private
     * @return void
     */
    private function _themeVars(){
        //存放在Session中
        if(!isset($_SESSION)){
            @session_start();
        }

        //默认的主题变量
//         $themeVars = array(
//             'viewConfig'    =>  $_SESSION['uiNavs'],
//             'currentUser'   =>  $_SESSION['LoginName'],
//             'chineseName'   =>  $_SESSION['ChineseName'],
//             'itilDeptId'    =>  $_SESSION['ItilDeptId'],
//             'itilDeptName'  =>  $_SESSION['ItilDeptName']
//         );
        $themeVars = array(
        		'viewConfig'    =>  array(),
        		'currentUser'   =>  "",
        		'chineseName'   =>  "",
        		'itilDeptId'    =>  "",
        		'itilDeptName'  =>  ""
        );

        //Write session data and end session
        session_write_close();

        return $themeVars;
    }


    /**
     * defaultThemeVars 
     * 默认主题的变量
     * @access public
     * @return void
     */
    public function defaultThemeVars(){
        return $this->_themeVars();
    }

    /**
     * sidebarThemeVars 
     * sidebar主题的变量
     * @access public
     * @return void
     */
    public function sidebarThemeVars(){
        return $this->_themeVars();
    }

    /**
     * emptyThemeVars 
     * 空主题的变量
     * @access public
     * @return void
     */
    public function emptyThemeVars(){
        return $this->_themeVars();
    }
}
