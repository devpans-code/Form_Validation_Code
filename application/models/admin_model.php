<?php

	/**
	* 
	*/
	class admin_model extends CI_Model
	{
		
		/*function __construct(argument)
		{
			# code...
		}*/

		function doValidate($admin,$pass)
		{
			$this->db->where('adminid',$admin);
			$this->db->where('adminpass',$pass);

			$query = $this->db->get('admin');

			return $query->result();
		}

		function doFatch()
		{
			$recored = $this->db->get('formdata');
			return $recored;
		}

		function doDelete($id)
		{
			$this->db->where('ID',$id);
			$d = $this->db->delete('formdata');
		}
	}

?>