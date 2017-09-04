<?php 
/**
* 
*/
class Seller_model extends CI_Model
{
	
	public function register()
	{
		$query=$this->db->insert("seller",$data);	
		if($query){
			$check=array("status"=>"ok",
					"message"=>"Your Registration Succesfully..."
			);	
		}
		else {
		$check=array("status"=>"ok",
			"message"=>"Your Registration fail..."
			);
		}	
		return $check;
	}

	public function login(){
		$name=$_POST['email'];
		$password=$_POST['password'];
		$query=$this->db->query("select * from tbl_admin where a_name='$name' and a_pass='$password' ");


	}
	
}
?>