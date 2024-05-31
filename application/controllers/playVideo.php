<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlayVideo extends CI_Controller {
	function __construct()  
	{   
		parent::__construct(); 
		//if(!$this->session->userdata('UserLoginSession'))
			//redirect('login'); 
		$this->load->model('video');

	}
	public function index()
	{
		$this->viewCount();
		$id= $this->input->get('id');
		$data["blog"]=$this->video->search_vid($id);
		$this->load->view('play',$data);
	}

	public function viewCount()
	{
		$id= $this->input->get('id');
		$data["blog"]=$this->video->search_vid($id);

		$details=$data['blog'][0];
		$views=$details->views+1;
		$this->video->updateViews($views,$id);
	}
}
?>