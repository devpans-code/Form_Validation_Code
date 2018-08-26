<?php

	/**
	* 
	*/
	class Inser_model extends CI_Model
	{
		function doStore($Name,$lName,$Id)
		{
			$this->db->set('fname',$Name);
			$this->db->set('lname',$lName);
			$this->db->set('l_id',$Id);

			$this->db->insert('name');
		}
	}

?>