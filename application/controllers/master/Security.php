<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Security',
        	'breadcrumbs'=>[
        		'Security'
        	]
        ];
    }
	
	public function ip() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Blacklist / Whitelist IP';
    	$view['activeurl']='security/ip';
        $view['content']=$this->load->view('master/security/security-ip', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    public function activitylogs() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Blacklist / Whitelist IP';
        $view['activeurl']='security/activitylogs';
        $view['content']=$this->load->view('master/security/activity-logs', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
}