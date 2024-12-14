<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Setting',
        	'breadcrumbs'=>[
        		'Setting'
        	]
        ];
    }
	
	public function games() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Game Setting';
    	$view['activeurl']='setting/games';
        $view['content']=$this->load->view('master/setting/setting-game', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
}
