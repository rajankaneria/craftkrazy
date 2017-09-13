<?php 
/**
* 
*/
class user_model extends CI_Model
{
	public function doRegister($data){
		$data["password"]=md5($data["password"]);
		$query=$this->db->insert("user_registration",$data);
		if($query){
				$check=array("status"=>"ok","message"=>"Registration Successfully...");
				$this->session->set_userdata("user",$data["email"]);

		}
		else{
				$check=array("status"=>"ok","message"=>"Registration Fail...");
		}
		return $check;
	}
	public function doLogin($data){
		$email=$data['email'];
		$password=md5($data['password']);
		$query=$this->db->query("select * from user_registration where email='$email' and password='$password' ");
		if($query->num_rows()==1){
			$check=array("status"=>"ok","message"=>"Login Successfully....");
			$this->session->set_userdata("user",$data["email"]);
		}
		else{
			$check=array("status"=>"ok","message"=>"Login Fail..");
		}
		return $check;

	}
}

?>