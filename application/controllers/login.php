<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()  
	{   
		parent::__construct(); 
		//if($this->session->userdata('UserLoginSession'))
			//redirect('welcome'); 
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function addsignup()
	{
		$this->load->view('signup');
	}

	public function signup()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('Uname','User Name','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');

			if($this->form_validation->run()==TRUE)
			{
				$username = $this->input->post('Uname');
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$data = array(
					'username'=>$username,
					'email'=>$email,
					'password'=>sha1($password),
					'status'=>'1'
				);

				$this->load->model('login_check');
				$this->login_check->insertuser($data);
				$this->session->set_flashdata('success','Successfully User Created');
				redirect(base_url('login/index'));			
			}
			else
			{
				redirect(base_url('login/addsignup'));
			}
		}

	}

	public function signin()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = sha1($password);

				$this->load->model('login_check');
				$status = $this->login_check->checkPassword($password,$email);
				if($status!=false)
				{
					$username = $status->username;
					$email = $status->email;

					$session_data = array(
						'username'=>$username,
						'email' => $email,
					);

                    $this->session->set_userdata('UserLoginSession',$session_data);//setuserdata-to create session

                    redirect(base_url('welcome'));
                }
                else
                {
                	$this->session->set_flashdata('error','Email or Password is Wrong');
                	redirect(base_url('login'));
                }

            }
            else
            {
            	$this->session->set_flashdata('error','Fill all the required fields');
            	redirect(base_url('login'));
            }
        }

    }

    public function uploadvid()
    {
    	$this->load->view('uploadvideo');
    }

    public function createThumbImg()
    {
    	$tmp_name = $_FILES['vUpload']['tmp_name'];
    	$name = $_FILES['video']['name'];
    	$path = "./uploads/";
    	move_uploaded_file($tmp_name,$path.$name);
    }

    public function saveVideo()
    {
    	$configVideo['upload_path'] = './uploads/'; # check path is correct
    	$configVideo['max_size'] = '102400';
		$configVideo['allowed_types'] = 'mp4'; # add video extenstion on here
		$configVideo['overwrite'] = FALSE;
		$configVideo['remove_spaces'] = TRUE;
		$video_name = $this->run_key(15);
		$configVideo['file_name'] = $video_name;

		$this->load->library('upload', $configVideo);
		$this->upload->initialize($configVideo);

		if (!$this->upload->do_upload('vUpload')) # form input field attribute
		{
		    # Upload Failed
			$this->session->set_flashdata('message', $this->upload->display_errors());
			redirect('login/uploadvid');
		}
		else
		{
		    # Upload Successfull
			//$url = $configVideo['upload_path'] .$video_name;
			$data=$this->upload->data();
			$url=base_url('uploads/'.$data['raw_name'].$data['file_ext']);

			$title = $this->input->post('vtitle');
			$details = $this->input->post('VDescription');
			$type = $this->input->post('vType');

			$data = array(
				'vTitle'  => $title,
				'vName'   => $video_name,
				'vDesc'   => $details,
				'vType'   => $type,
				'vUser'	=>$_SESSION['UserLoginSession']['email']
			);
			$this->load->model('Video');
			$set1 =  $this->Video->uploadData($data);
			//$this->createThumbImg();
			$this->session->set_flashdata('message', 'Video Has been Uploaded');
			redirect('login/uploadvid');
		}
	}

	public function run_key($num_chars) 
	{

		$chars = array(
			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
			'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
			'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '?', '!', '@', '#',
			'$', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'A', 'B', 'C', 'D', 'E'
		);

		shuffle($chars);

		//$num_chars = count($chars) - 1;
		$token = '';

		for ($i = 0; $i < $num_chars; $i++)
	    { // <-- $num_chars instead of $len
	    	$token .= $chars[mt_rand(0, $num_chars)];
	    }

	    return $token;
	}

	public function logout()
	{
		$this->session->unset_userdata('UserLoginSession');
		redirect(base_url('home'));
	}
}

?>