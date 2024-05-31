<?php
class Login_check extends CI_model
{
	function insertuser($data)
	{
		$this->db->insert('users',$data);
	}

	function checkPassword($password,$email)
	{
		$query = $this->db->query("SELECT * FROM users WHERE password='$password' AND email='$email' AND status='1'");
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}

	}

}
?>