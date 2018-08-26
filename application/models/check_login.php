<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class check_login extends CI_Model
	{
		
		/*function __construct(argument)
		{
			# code...
		}*/

		function doMatch($email,$password)
		{
			$this->db->where("email",$email);
			$this->db->where("password",$password);

			$info = $this->db->get("formdata");

			return $info->result();
		}

		function getBulk()
		{
			$id = $this->session->userdata('userId');
			$this->db->where('id',$id);
			$this->db->select("formdata.*, cities.city_name, states.state_name, countries.country_name");
			$this->db->from('formdata');
			$this->db->join('cities', 'cities.ci_id = formdata.city');
			$this->db->join('states', 'states.s_id = formdata.state');
			$this->db->join('countries', 'countries.c_id = formdata.country');
			$this->db->order_by('id', 'ASC');
			$details = $this->db->get();
			//echo $this->db->last_query();
			//exit();
			return $details;
		}
	}

?>