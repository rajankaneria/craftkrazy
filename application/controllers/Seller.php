<?php 
/**
* 
*/
class Seller extends CI_Controller
{
	public function index(){
		$headerData = array(
			"pageTitle" => "Sign Up",
			"stylesheet" => array('seller.css')			
		);
		$footerData = array(
			"jsFiles" => array('register.js')
		);
		$viewData = array(
			"viewName" => "register-login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('seller-template',$viewData);
	}
	public function register()
	{
		$data=$_POST["data"];
		$this->load->model("Seller_model");


		$output=$this->Seller_model->register($data);
		echo json_encode($output);

	}

public function login(){
	$data=$_POST["data"];
	$this->load->model("Seller_model");
	$result=$this->Seller_model->login($data);
	echo json_encode($result);
}
}
?>