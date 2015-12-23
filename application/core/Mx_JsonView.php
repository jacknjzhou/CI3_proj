<?php
/**
 * @desc 服务器JSON协议
 *
 *  1XX  一般消息相应
 *  2XX  表格响应体
 *
 * @author jackson
 * @date 2012/3/22
 */
class Mx_JsonView  extends Mx_CI{

	/**
	 * 窗口弹出提示
	 * @var int
	 */
	const  MESSAGE_OK = 100;
	const  MESSAGE_ERROR = 101;
	const  MESSAGE_WARNING = 102;


	/**
	 * 表格内容
	 */
	const GRID_SIMPLE = 100;

	/**
	 * 返回数据
	 * @param  $data
	 */
	public function output($data , $return = FALSE){
		$str = json_encode($data);
		if( $return ){
			return $str;
		}

		echo $str;
	}

	/////////////////Grid  Start//////////////////////////

	/**
	 * 表格返回
	 * @param int $code
	 * @param array $data
	 * @param bool $return
	 */
	private function _grid( $code , $data = array(), $return = FALSE){

		$ot = array('code' => $code ,
					'data' => $data);

		return $this->output($ot , $return);
	}

	/**
	 * 普通表格返回
	 * @param array $data
	 * @param bool $return
	 */
	public function grid( $data = array(), $return = FALSE){
		if( empty($data)){
			$data = array('count' => 0, 'list' => array());
		}

		return $this->_grid( self::GRID_SIMPLE, $data);
	}

	/////////////////Grid  End//////////////////////////

	/////////////////Message  Start//////////////////////////

	/**
	 * 消息返回
	 * @param int $code
	 * @param string $message
	 * @param bool $return
	 */
	private function _message($code , $message , $data = array(), $return = FALSE){

		$ot = array('code' => $code ,
					'message' => $message,
					'data' => $data);

		return $this->output($ot , $return);
	}

	/**
	 * 警告响应
	 * @param string $message
	 * @param bool $return
	 */
	public function warning($message , $data = array(), $return = FALSE){
		return $this->_message(self::MESSAGE_WARNING, $message ,$data);
	}

	/**
	 * 错误响应
	 * @param string $message
	 * @param bool $return
	 */
	public function error($message ,  $data = array(), $return = FALSE){
		return $this->_message(self::MESSAGE_ERROR,$message ,$data);
	}

	/**
	 * 成功响应
	 * @param string $message
	 * @param bool $return
	 */
	public function ok($message , $data = array(), $return = FALSE){
		return $this->_message(self::MESSAGE_OK, $message ,$data);
	}

	/**
	 * 返回包含状态的数据
	 * @param bool $success
	 * @param string $message
	 * @param array $data
	 * @param bool $return
	 */
	public function outputData($success , $message , $data = array(), $return = FALSE){
		$resultArr = array('code' => $success ? self::MESSAGE_OK : self::MESSAGE_ERROR,
					 'message' => $message,
					 'data' => $data);
		if ($return){
			return $this->output($resultArr);
		} else {
			echo $this->output($resultArr);
		}
	}
	/////////////////Message  End//////////////////////////
}
