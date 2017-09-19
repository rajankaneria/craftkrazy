<?php 
/**
* 
*/
class User extends CI_Controller{

	public function register(){
		$data=$_POST["data"];
		$this->load->model("user_model");
		$result=$this->user_model->doRegister($data);
		echo json_encode($result);
	}
	public function login(){
		$data=$_POST["data"];
		$this->load->model("user_model");
		$result=$this->user_model->doLogin($data);
		echo json_encode($result);	
	}
	public  function logout()
	{
		$this->session->unset_userdata("user");
		$this->session->sess_destroy();
		header('location:'.base_url()."home");
	}

}
	

?>