<?php
/**
 * 模型本地基类
 * 特殊SQL语句
 * @author jackson
 * @package matrix.mx
 */
class Mx_Model extends CI_Model{
	/**
	 * 字段转义
	 * @param Array $input
	 * @param $escape ' or `
	 * @param $multi  批量转义
	 * !!!! 字符串的值序列复杂，无法切分，必须传递数组
	 */
	private function _escape($input , $escape , $multi = TRUE){

		if( is_array($input)){

			foreach($input as $k => $v){
				$input[$k] = $escape . $v . $escape;
			}

			return implode(',' , $input);
		}

		if ( $multi ){
			//字符串中批量转义
			return preg_replace('/([\w\x{4e00}-\x{9fa5}]+)/u', $escape . '\\1' . $escape, $input);
		}

		//字符串整体转义
		return $escape . $input . $escape;
	}

	/**
	 * 值引号
	 * @param  mixed $value
	 * 如果实现批量，设置$value为数组
	 */
	protected function _quote($value ){
		return $this->_escape($value , '\'' , FALSE);
	}

	/**
	 * 键转义
	 * @param mixed $value
	 */
	protected function _protect($key ){
		return $this->_escape($key , '`');
	}
	
	
	/**
	 * 将key作为一维的下标
	 * @params $keyName
	 * @params $array
	 */
	protected function indexArray( $keyName , $array){
		if( empty($array) OR ! is_array($array)){
			return array();
		}
		
		$_temp = array();
		foreach( $array as $a){
			$_temp[$a[$keyName]]  = $a;
		}
		return $_temp;
	}
	
}