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
	public function maicatAjax(){
		
		$con=mysqli_connect("localhost","root","","craftzae_craftcrazy");
		$maincatData = $_POST['maincatId'];
		echo "<option>Select Main Category</option>";
		$res1=mysqli_query($con,"select * from `parent_category`  WHERE `mc_id` = '$maincatData'"); 
        while($data1=mysqli_fetch_array($res1))
        {
       		echo "<option value='".$data1['pc_id']."'>".$data1['pc_name']."</option>" ;
            
        }
	}

	public function parentcatAjax(){		
		$con=mysqli_connect("localhost","root","","craftzae_craftcrazy");
		$parentData = $_POST['parentcatId'];
		echo "<option>Select Parent Category</option>";
		$res1=mysqli_query($con,"select * from `child_category`  WHERE `pc_id` = '$parentData'"); 
        while($data1=mysqli_fetch_array($res1))
        {
       		echo "<option value='".$data1['cc_id']."'>".$data1['cc_name']."</option>" ;
            
        }
	}


	public function childcatAjax(){
		
		$con=mysqli_connect("localhost","root","","craftzae_craftcrazy");
		$childData = $_POST['childcatId'];
		echo "<option>Select Child Category</option>";
		$res1=mysqli_query($con,"select * from `sub_category`  WHERE `cc_id` = '$childData'"); 
        while($data1=mysqli_fetch_array($res1))
        {
       		echo "<option value='".$data1['sc_id']."'>".$data1['sc_name']."</option>" ;
            
        }
	}



}
?>