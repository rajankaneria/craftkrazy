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
		$maincatData = $_POST['maincatId'];
		$this->load->model("product_model");
		//get list of parentcategories for maincatid
		$parentCategoryList = $this->product_model->getAllParentCatByMainCat($maincatData);
		 //return options
		echo "<option>Select Main Category</option>";	
        foreach($parentCategoryList as $key=>$parentCategoryRow)
        {
       		echo "<option value='".$parentCategoryRow['pc_id']."'>".$parentCategoryRow['pc_name']."</option>" ;
        }
	}

	public function parentcatAjax(){				
		$parentData = $_POST['parentcatId'];
		$this->load->model("product_model");
		$childcatData=$this->product_model->getChildCat($parentData);
		var_dump($childcatData);
		echo "<option>Select Parent Category</option>";
		
        foreach($childcatData as $key=>$chilcatRow)
        {
       		echo "<option value='".$chilcatRow['cc_id']."'>".$chilcatRow['cc_name']."</option>" ;
            
        }
	}


	public function childcatAjax(){		
		
		$childData = $_POST['childcatId'];
		$this->load->model("product_model");
		$subCatData=$this->product_model->getSubcatByChildcat($childData);
		echo "<option>Select Child Category</option>";		 
        foreach($subCatData as $key=>$subCatRow)
        {
       		echo "<option value='".$subCatRow['sc_id']."'>".$subCatRow['sc_name']."</option>" ;
            
        }
	}



}
?>