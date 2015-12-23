<?php
/**
 * 扩展默认加载器方法
 * @author jackson
 */
class Mx_Loader extends CI_Loader{

	/**
	 * 存储加载的业务逻辑对象 
	 * @var array
	 */
	protected  $_ci_bzs = array();
	protected  $_ci_bz_paths = array();
	
	
	/**
	 * 构造函数 
	 */
	public function __construct(){
		$this->_ci_bz_paths = array(APPPATH);
		parent::__construct();
	}
	
	/**
	 * 加载业务逻辑对象
	 * @param mixed $bz
	 */
	public function bz( $bz , $name = ''){

		if( is_array($bz)){
			
			foreach($bz as $b){
				
				$this->bz($b);
			}
			
			return; 
		}

		$path = '';

		// Is the bz in a sub-folder? If so, parse out the filename and path.
		if (($last_slash = strrpos($bz, '/')) !== FALSE)
		{
			// The path is in front of the last slash
			$path = substr($bz, 0, $last_slash + 1);

			// And the bz name behind it
			$bz = substr($bz, $last_slash + 1);
		}

		if ($name == '')
		{
			$name = $bz;
		}

		if (in_array($name, $this->_ci_bzs, TRUE))
		{
			return;
		}

		$CI =& get_instance();
		if (isset($CI->$name))
		{
			show_error('The business name you are loading is the name of a resource that is already being used: '.$name);
		}

		$bz = strtolower($bz);

		foreach ($this->_ci_bz_paths as $bz_path)
		{
			require_once($bz_path.'bzs/'.$path.$bz.'.php');

			$bz = ucfirst($bz);

			$CI->$name = new $bz();

			$this->_ci_bzs[] = $name;
			return;
		}

		// couldn't find the bz
		show_error('Unable to locate the business you have specified: '.$bz);
	}
    	
    /**
     * data 
	 * 加载数据源 
     * @param string $name 
     * @access public
     * @return mixed
     */
	public function data($name){
		require APPPATH . 'data/' . $name . EXT;
		return $data;
	}
}
