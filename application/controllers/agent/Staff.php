<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Staff',
        	'breadcrumbs'=>[
        		'Staff'
        	]
        ];
    }
	
	public function list() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Staff List';
    	$view['activeurl']='staff/list';
        $view['content']=$this->load->view('agent/staff/staff-list', $view,true);
        $this->load->view('layouts/agent/master', ['view'=>$view]);
    }
    
}
