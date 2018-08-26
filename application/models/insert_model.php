<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class insert_model extends CI_Model
{
	
	/*function __construct(argument)
	{
		# code...
	}*/

	function doInsert($Link)
	{
		/*Using array we get data from user then after store those array in to the database*/
		/* $insertData is name of array. */
		$insertData = array(
			'fname'=> $_POST['fname'],
			'lname'=> $_POST['lname'],
			'email'=> $_POST['email'],
			'password'=> $_POST['password'],
			'confirm'=> $_POST['password2'],
			'landline'=> $_POST['landline'],
			'phone'=> $_POST['phone'],
			'mobile'=> $_POST['mobile'],
			'address1'=> $_POST['add1'],
			'address2'=> $_POST['add2'],
			'city'=> $_POST['City'],
			'state'=> $_POST['State'],
			'country'=> $_POST['Country'],
			'pincode' => $_POST['pincode'],
			'image' => $Link 
			);

		/*Insert array data in to the database table*/
		/* syntac : $this->db->insert('here.. insert table name', 'Name of array') */
		$this->db->insert('formdata', $insertData);
	}


	function doMatch($Email,$Password)
		{
			$this->db->where("email",$Email);
			$this->db->where("password",$Password);

			$info = $this->db->get("formdata");

			return $info->result();
		}

		function getBulk()
		{
			/* Got sessoin userID */
			$id = $this->session->userdata('userId');	
			$this->db->where('id',$id);
			
			/* Perform Join operation between formdata, city,state and country table */
			$this->db->select("formdata.*, cities.city_name, states.state_name, countries.country_name");
			$this->db->from('formdata');
			$this->db->join('cities', 'cities.ci_id = formdata.city');
			$this->db->join('states', 'states.s_id = formdata.state');
			$this->db->join('countries', 'countries.c_id = formdata.country');
			
			/* Arrange data in from of assending ordar using ID */
			$this->db->order_by('id', 'ASC');
			$details = $this->db->get();
			
			/* It is show the last query */
			//echo $this->db->last_query();
			//exit();
			
			return $details;
		}

		function fetch_country()
		{
			$this->db->order_by('country_name','ASC');
			$sql = $this->db->get('countries');
			return $sql->result();
		}

		function fetch_state($c)
		{
			$this->db->where('c_id',$c);
			$this->db->order_by('state_name','ASC');
			$sql = $this->db->get('states');
			//echo $this->db->last_query();
			//exit();
			//return $sql->result();
			
			$op = '<option value="">Select State</option>';
			foreach ($sql->result() as $row) 
			{
				$op .= '<option value="'.$row->s_id.'">'.$row->state_name.'</option>';
			}
			return $op;
		}

		function fetch_city($state_id)
		{
			$this->db->where('s_id', $state_id);
			$this->db->order_by('city_name', 'ASC');
			$sql = $this->db->get('cities');
			$op = '<option value="">Select City</option>';
			foreach ($sql->result() as $row) 
			{
				$op .= '<option value="'.$row->ci_id.'">'.$row->city_name.'</option>';
			}
			return $op;
		}

		function check_email($Email_ad)
		{
			$this->db->where('email', $Email_ad);
			$cross = $this->db->get('formdata');
			//return $cross->result();
			//echo $this->db->last_query();
			//exit();
			if($cross->num_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function checkMobile($Mobile_No)
		{
			$this->db->where('mobile', $Mobile_No);
			$mb = $this->db->get('formdata');
			//echo $this->db->last_query();
			//exit();
			if($mb->num_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}

		}

}

?>