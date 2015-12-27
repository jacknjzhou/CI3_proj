<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match_task extends Mx_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
	public function  __construct(){
		parent::__construct();
		
		}
	
	public function index(){
		$data =Array();
		$data['detail_info']=$this->model->match_task->get_info();
		log_message("error", json_encode($data));
		$this->page->renderInTheme('match_task',array('class'=>'match_task','data'=>$data),'default');
		}
	/***/
	public function get_task_list_info_by_condition($condition=NULL){
		$data = Array();
		$data['detail_info']=$this->model->match_task->get_info($condition);
		
		$this->page->renderInTheme('match_task',array('class'=>'match_task','data'=>$data),'default');
	}
	public function get_task_info_ajax_by_condition(){
		$info = $this->input->post('id');
		log_message("error","enter here");
		log_message("error",$info);
		if ($info){
			$result = $this->model->match_task->get_info(Array('id'=>$info));
			
		}
		else{
			$result=Array();
		}
		$tt = json_encode($result);
		log_message("error", $tt);
		echo $tt;
		return;
	}
}
