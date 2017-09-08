<?php 
/**
* 
*/
class Seller_model extends CI_Model
{
	
	public function register($data)
	{
		$data["password"] = md5($data["password"]);
		
		$query=$this->db->insert("seller",$data);

		if($query){
			$check=array("status"=>"ok",
					"message"=>"Your Registration Succesfully..."
			);	
			$this->session->set_userdata('email', $data["email"]);
		}
		else {
		$check=array("status"=>"ok",
			"message"=>"Your Registration fail..."
			);
		}	
		return $check;
	}

	public function login($data){
		$name=$data['a_name'];
		$password=md5($data['a_pass']);
		$query=$this->db->query("select * from seller where email='$name' and password='$password' ");
		if($query->num_rows()==1){
			$check=array(
				"status"=>"ok",
				"message"=>"Login Successfully.."
				);
			$this->session->set_userdata('email', $name);
			$this->session->set_userdata('admin', $name);
		}
		else{
			$check=array(
				"status"=>"fail",
				"message"=>"lOGIN Fail...."

				);			
		}
		return $check;
	}

	public function  currentUser(){
		$email = $this->session->userdata('email');
		$query = $this->db->query("select * from seller where email='$email'");
		return $query->row_array();
	}
	
}
?>