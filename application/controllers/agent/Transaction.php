<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Transaction',
        	'breadcrumbs'=>[
        		'Transaction'
        	]
        ];
    }
	
	public function deposit() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Deposit List';
    	$view['activeurl']='transaction/deposit';
        $view['content']=$this->load->view('agent/transaction/deposit-list', $view,true);
        $this->load->view('layouts/agent/master', ['view'=>$view]);
    }
    public function wd() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Withdrawal List';
        $view['activeurl']='transaction/wd';
        $view['content']=$this->load->view('agent/transaction/wd-list', $view,true);
        $this->load->view('layouts/agent/master', ['view'=>$view]);
    }
    
}
