<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->model("Data_model");
    }
    public function loadDashboard($filters=[]){
        $html='';
        $columns=$this->db->order_by('order_no')->get('dashboard_columns')->result();
        foreach($columns as $col){
            $colHtml=$this->loadDashboardColumn($col);
            $html.=$colHtml;
        }
        return $html;
    }
    public function loadDashboardColumn($col,$filters=[]){
        $items=$this->db->order_by('order_no')->where('dashboard_column_id',$col->id)->get('dashboard_items')->result();
        $html='';
        foreach($items as $item){
            $itemHtml=$this->loadDashboardItem($item,$filters);
            $html.=$itemHtml;
        }
        return $html;
    }
    public function loadDashboardItem($item,$filters=[]){
        $html='';
        switch($item->type){
            case 'overview':$html=$this->loadOverview($item,$filters);break;
            case 'sales_graph':$html=$this->loadSales($item,$filters);break;
            case 'data_list':$html=$this->loadDatalist($item,$filters);break;
            case 'nine_grid':$html=$this->loadNineGrid($item,$filters);break;
        }
        return $html;
    }
    public function loadOverview($item,$filters=[]){
        $data=json_decode($item->data);
        switch($data->group_by){
            // case 'age':
        }
    }

}
