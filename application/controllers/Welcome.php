<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		$this->load->model('insert_model');
	}

	public function index()
	{
		//$this->load->view('register');
		$data['country'] = $this->insert_model->fetch_country();
		$this->load->view('Register',$data);
	}

	function doPut()
	{		
			
			$Email = $_POST['email'];
			$Password = $_POST['password'];
			$Link = $this->doUploadImage();
			/*This Request Goes to insert Model*/
			$this->insert_model->doInsert($Link);
			/*After insert data link should be redirect on to the doLogin function*/
			$this->doLogin($Email, $Password);
			
	}

	public function doUploadImage()
	{
		$f = explode('.',$_FILES["image"]["name"]);
		$f = $f[count($f)-1];
		$URL = "./images/".uniqid(rand()).'.'.$f;
		if(in_array($f, array("jpg","jpeg","png","gif")))
			if(is_uploaded_file($_FILES["image"]["tmp_name"]))
				if(move_uploaded_file($_FILES["image"]["tmp_name"], $URL))
					return $URL;

		return "";
	}

	function doLogin($Email,$Password)
		{
			//$email = $this->input->post("email");
			//$password = $this->input->post("password");
			
			$data = $this->insert_model->doMatch($Email,$Password);
			if(count($data) > 0)
			{
				$i = array(
					
						'userId' => $data[0] -> id,
						'fname' => $data[0] -> fname,
						'lname' => $data[0] -> lname,
						'image' => $data[0] -> image
					); 

				$this->session->set_userdata($i);
				redirect('Welcome/getDisplay');
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
					$d['h'] = $this->insert_model->getBulk();
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
				redirect('Login_con');																					
			}

		function state()
		{
			if($this->input->post('c_id'))
			{
				$c = $this->input->post('c_id');
				echo $this->insert_model->fetch_state($c);
			}
		}

		function city()
		{
			if($this->input->post('s_id'))
			{
				echo $this->insert_model->fetch_city($this->input->post('s_id'));
			}
		}

		function email()
		{
			/*if(!filter_val($_POST['email']), FILTER_VALIDATE_EMAIL)
			{
				echo "<i style='color:red;font-weight:bold;font-size:60%;'>Invalid Email</i>";
			}
			else
			{*/
				if($this->insert_model->check_email($_POST['email']))
				{
					echo "<i style='color:red;font-weight:bold;font-size:60%;'>Email Already Used</i>";
				}
				else
				{
					echo "<i style='color:green;font-weight:bold;font-size:60%;'>Email Available</i>";
				}
			//}
		}

		function getMobile()
		{
			if($this->insert_model->checkMobile($_POST['mobile']))
			{
				echo "<i style='color:red;font-weight:bold;font-size:60%;'>Mobile Number Already Used</i>";
			}
			else
			{
				echo "<i style='color:green;font-weight:bold;font-size:60%;'>Mobile Number is Available</i>";
			}
		}

}
