<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {
	public function __construct() {
        parent::__construct();
        $this->_defaultview=[
        	'objectname'=>'Report',
        	'breadcrumbs'=>[
        		'Report'
        	]
        ];
    }
	
	public function agent_win_lose() {
		$view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Agent Win Lose Report';
    	$view['activeurl']='report/agent_win_lose';
        $view['content']=$this->load->view('master/report/agent-win-lose', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    public function player_win_lose() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Player Win Lose Report';
        $view['activeurl']='report/player_win_lose';
        $view['content']=$this->load->view('master/report/player-win-lose', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    public function game_win_lose() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Game Win Lose Report';
        $view['activeurl']='report/game_win_lose';
        $view['content']=$this->load->view('master/report/game-win-lose', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    public function agent_daily() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Agent Daily Report';
        $view['activeurl']='report/agent_daily';
        $view['content']=$this->load->view('master/report/agent-daily', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    public function agent_invoice() {
        $view=$this->_defaultview;

        // Load the view with data
        $view['pagename']=$view['breadcrumbs'][]='Agent Invoice Report';
        $view['activeurl']='report/agent_invoice';
        $view['content']=$this->load->view('master/report/agent-invoice', $view,true);
        $this->load->view('layouts/master/master', ['view'=>$view]);
    }
    
}
