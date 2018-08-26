<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Login_con extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model("check_login");
		}

		public function index()
		{
			$this->load->view('Login');
		}

		function doLogin()
		{
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			
			$data = $this->check_login->doMatch($email,$password);

			if(count($data) > 0)
			{
				$i = array(
					
						'userId' => $data[0] -> id,
						'fname' => $data[0] -> fname,
						'lname' => $data[0] -> lname,
						'image' => $data[0] -> image
					); 

				$this->session->set_userdata($i);
				redirect('Login_con/getDisplay');
				//$this->getDisplay();
			}

			else
			{
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				$this->index();
			}
		}

		function getDisplay()
			{
				if($this->session->userdata('fname') != '' && $this->session->userdata('lname') != '')
				{
					$d['h'] = $this->check_login->getBulk();
					$this->load->view('Profile',$d);
				}
				else
				{
					$this->index();
				}
			}

		function doLogout()
			{
				$this->session->unset_userdata('fname');
				$this->session->unset_userdata('lname');
				session_destroy();
				$this->index();																						
			}
	}

?>