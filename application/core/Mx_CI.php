<?php
/**
 * 资源自动装载器
 * @author jackson
 */
class Mx_CI{

	public function __get($key){
		$CI = & get_instance();
		return $CI->$key;
	}
}

/**
 * 模型对象自动加载器
 * 在命名上有前缀，存储时不变
 * @author jackson
 */
class Mx_Model_Proxy{

	public $prefix = 'm';

	public function __get($key){
		$CI = & get_instance();

		$modelName = $this->prefix.$key;
		if(! isset($CI->$modelName)){	
			$CI->load->model($modelName);
		}
		return $CI->$modelName;
	}
}

/**
 * 库对象自动加载器
 * 对象在CI中使用别名存储，在命名上无前缀
 * @author jackson
 *
 * @todo param
 */
class Mx_Library_Proxy{
	/**
	 * @var 
	 */
	public $prefix = 'lib_';

	public function __get($key){
		$CI = & get_instance();

		$libName = $this->prefix . $key;
		if(! isset($CI->$libName)){
			$CI->load->library( $key , NULL , $libName );
		}
		return $CI->$libName;
	}
}
