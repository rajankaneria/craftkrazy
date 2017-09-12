<?php 
/**
* 
*/
class user_model extends CI_Model
{
	public function doRegister($data){
		$query=$this->db->insert("user-registration",$data);
		if($query){
				$check=array("status"=>"ok","message"=>"Registration Successfully...")
		}
		else{
				$check=array("status"=>ok,"message"=>"Registration Fail...")
		}
		return $check;
	}
	public function doLogin($data){
		$email=$data['email'];
		$password=$data['password'];
		$query=$this->db->query("select * from user-registration where email='$email' and password='$password' ");
		if($query->num_rows()==1){
			$check=array("status"=>"ok","message"=>"Login Successfully....");
		}
		else if{
			$check=array("status"=>"ok","message"=>"Login Fail..")
		}
		return $check

	}
}

?>