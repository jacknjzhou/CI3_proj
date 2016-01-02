<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Step_mgr extends Mx_Controller {

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
        $data['detail_info']=$this->model->step_mgr->get_info();
        log_message("error", json_encode($data));
        $this->page->renderInTheme('step_mgr',array('class'=>'step_mgr','data'=>$data),'default');
        }
    
}
