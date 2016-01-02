<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpre_check_task extends Mx_Model {
    
    public function __construct(){
        parent::__construct();
        $this->sqlite_DB = $this->load->database('sqlite',TRUE);
        $this->table = 't_opt_info';
    }
    
    public function get_info($condition=NULL){
        
//      $query = $this->sqlite_DB->select('*')->from('demo');
//      foreach ($query->result as $row){
//          echo $row->id;
//      }
        if ($condition ==NULL){
            $query = 'select * from '.$this->table.';';
        }
        else{
            log_message('error', json_encode($condition));
            $query = 'select * from '.$this->table.' where ';
            foreach ($condition as $key=>$value){
                $query =$query.'`'.$key.'`';
                $query=$query.'='.'\''.strval($value).'\'';
            }
            $query=$query.';';
        }
        log_message('error', $query);
        return $this->sqlite_DB->query($query)->result_array(); 
    #echo $query->num_rows();
    }
    
}