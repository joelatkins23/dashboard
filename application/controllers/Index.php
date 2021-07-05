<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		parent::__construct();			
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->database(); 
		$this->load->model('index_model');
		$this->lang->load("message","arabic");
    }

	public function index()
	{
		$lang=$this->input->post('id');
		$data['city_lastweek_norms']=$this->index_model->city_lastweek_norms();
		$data['city_lastweek_counts']=$this->index_model->city_lastweek_counts();
		$data['city_daily_norms']=$this->index_model->city_daily_norms();
		$data['city_daily_counts']=$this->index_model->city_daily_counts();
		$data['lang_lastweek_norms']=$this->index_model->lang_lastweek_norms();
		$data['lang_lastweek_counts']=$this->index_model->lang_lastweek_counts();
		$data['tweet_count']=$this->index_model->tweet_count();
		$data['positive_score']=$this->index_model->positive_score();
		$data['negative_score']=$this->index_model->negative_score();
		$this->load->view('Layout/header');
		$this->load->view('dashboard/index', $data);
		$this->load->view('Layout/footer');
	}
	
}
