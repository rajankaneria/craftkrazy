<?php 
/**
* 
*/
class Seller_model extends CI_Model
{
	
	public function register($data)
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

	public function login($data){
		$name=$data['a_name'];
		$password=md5($data['a_pass']);
		$query=$this->db->query("select * from tbl_admin where a_name='$name' and a_pass='$password' ");
		if($query->num_rows()==1){
			$check=array(
				"status"=>"ok",
				"message"=>"Login Successfully.."
				);
		}
		else{
			$check=array(
				"status"=>"fail",
				"message"=>"lOGIN Fail...."

				);
			
		}
		return $check;


	}
	
}
?>