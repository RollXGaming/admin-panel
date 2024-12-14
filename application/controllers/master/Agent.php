<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Agent',
        	'breadcrumbs'=>[
        		'Agent'
        	]
        ];
    }
	
	public function list() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Search Agent';
    	$view['activeurl']='agent/list';
        $view['content']=$this->load->view('master/agent/agent-list', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    public function settings() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Agent Setting';
        $view['activeurl']='agent/settings';
        $view['content']=$this->load->view('master/agent/agent-setting', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    public function balances() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Agent Balances';
        $view['activeurl']='agent/balances';
        $view['content']=$this->load->view('master/agent/agent-balance', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
}
