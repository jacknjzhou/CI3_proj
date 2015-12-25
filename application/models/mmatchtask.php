<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmatchtask extends Mx_Model {
	
	public function __construct(){
		parent::__construct();
		$this->sqlite_DB = $this->load->database('sqlite',TRUE);
	}
	
	public function get_info(){
		
// 		$query = $this->sqlite_DB->select('*')->from('demo');
// 		foreach ($query->result as $row){
// 			echo $row->id;
// 		}
		$query = 'select * from host_operator;';
		return $this->sqlite_DB->query($query)->result_array();	
	#echo $query->num_rows();
	}
	
}