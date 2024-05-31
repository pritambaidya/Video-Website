<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()  
	{   
		parent::__construct();
		//if(!$this->session->userdata('UserLoginSession'))
			//redirect('login'); 
		$this->load->model('video');
		$this->load->library("pagination"); 
	}
	public function index()
	{
		$config['base_url'] = base_url('welcome');
		$config['total_rows'] = $this->video->get_count();
		$config['per_page'] = 12;
		$config['full_tag_open'] = "<ul class='btn-group'>";
		$config['full_tag_close'] = "</ul>";
		$config['next_tag_open'] = '<li class="btn btn-outline-info">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="btn btn-outline-info">';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li class="btn btn-outline-info">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="btn btn-success">';
		$config['cur_tag_close'] = '</li>';

		//$config['uri_segment'] = 3;
		$this->pagination->initialize($config);

		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		$data["links"] = $this->pagination->create_links();
		$data['blog'] = $this->video->get_personalvid($config["per_page"], $this->uri->segment(2));


        //return the data in view  
		$this->load->view('welcome_message',$data);
	}
}
