<?php
	
	/**
	* 
	*/
	class New_model extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();

			$this->load->model('insert_model');
		}

		public function index()
		{
			//$this->load->view('Ajax_To');
			$data['country'] = $this->insert_model->fetch_country();
			$this->load->view('Register',$data);
		}

		/*function check()
		{
			$name = $_POST['name'];

			if($name == "")
			{
				$msg = "empty data";
			}
			
			echo $name;
		}*/

		function State()
		{
			if($this->input->post('c_id'))
			{
				$c = $this->input->post('c_id');
				echo $this->insert_model->fetch_state($c);
			}
		}
	}

?>