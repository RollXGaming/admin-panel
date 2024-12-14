<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Dashboard',
        	'breadcrumbs'=>[
        		'Dashboard'
        	]
        ];
    }
	
	public function index() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Dashboard';
    	$view['activeurl']='dashboard';
        $view['content']=$this->load->view('master/dashboard/agent', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    public function indexall() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Dashboard';
        $view['activeurl']='dashboard';
        $view['content']=$this->load->view('master/dashboard/agent-all', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
}
