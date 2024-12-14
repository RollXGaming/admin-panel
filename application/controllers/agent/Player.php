<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Player',
        	'breadcrumbs'=>[
        		'Player'
        	]
        ];
    }
	
	public function list() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Player List';
    	$view['activeurl']='player/list';
        $view['content']=$this->load->view('agent/player/player-list', $view,true);
        $this->load->view('layouts/agent/master', ['view'=>$view]);
    }
    public function top() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='TOP Player List';
        $view['activeurl']='player/top';
        $view['content']=$this->load->view('agent/player/top-player', $view,true);
        $this->load->view('layouts/agent/master', ['view'=>$view]);
    }
    public function referal_list() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Referal List';
        $view['activeurl']='player/referal_list';
        $view['content']=$this->load->view('agent/player/referal-list', $view,true);
        $this->load->view('layouts/agent/master', ['view'=>$view]);
    }
    public function blacklist() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Blacklisted Player List';
        $view['activeurl']='player/blacklist';
        $view['content']=$this->load->view('agent/player/blacklisted-list', $view,true);
        $this->load->view('layouts/agent/master', ['view'=>$view]);
    }
}
