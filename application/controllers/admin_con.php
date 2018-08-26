<?php

	/**
	* 
	*/
	class admin_con extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('admin_model');
		}

		public function index()
		{
			$this->load->view('admin');
		}

		function doCheck()
		{
			$admin = $this->input->post('userName');
			$pass = $this->input->post('passWord');

			$valid = $this->admin_model->doValidate($admin,$pass);

			if(count($valid) > 0)
			{
				$valid_data = array(
					'admin_user' => $valid[0] -> adminid
					);
				$this->session->set_userdata($valid_data);

				redirect('admin_con/doShow');
			}
			else
			{
				$this->session->set_flashdata('errors','Invalid Admin ID and Password');
				redirect('admin_con/index');
			}
		}

		function doShow()
		{
			if($this->session->userdata('admin_user') != '')
			{
				$h['info'] = $this->admin_model->doFatch();
				$this->load->view('DisplayFile',$h);
			}
			else
			{
				redirect('admin_con/index');
			}
		}

		function logout()
		{
			$this->session->unset_userdata('admin_user');
			session_destroy();
			redirect('admin_con/index');
		}

		function delete($id)
		{
			$this->admin_model->doDelete($id);
			//echo "Delete Data";
			redirect('admin_con/doShow');
		}
	}

?>