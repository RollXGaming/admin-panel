<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Account',
        	'breadcrumbs'=>[
        		'Account'
        	]
        ];
    }
	
	public function mybalance() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='My Balance';
    	$view['activeurl']='account/mybalance';
        $view['content']=$this->load->view('master/account/my-balance', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    
}
