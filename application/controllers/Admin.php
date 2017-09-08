<?php 
/**
* 
*/
class Admin extends CI_Controller
{
  public function index()
  {
    if(!$this->session->userdata("admin"))
    {
      header("Location:".base_url()."admin/login");
    }
    $this->load->model("product_model");
    $productsData=$this->product_model->allProduct();
    $categoryList=$this->product_model->getAllMainCat();

    $headerData = array(
      "pageTitle" => "Dashboard",
      "stylesheet" => array('dashboard.css')     
    );
    $footerData = array(
      "jsFiles" => array('products.js')
    );
    $viewData = array(
      "viewName" => "dashboard",
      "viewData" => array("productsData"=>$productsData,"categoryList"=>$categoryList),
      "headerData" => $headerData,
      "footerData" => $footerData 
    );
    $this->load->view('admin-template',$viewData);
  }


  public function login(){
 
      
      $headerData = array(
        "pageTitle" => "Sign Up",
        "stylesheet" => array('seller.css','dashboard.css')     
      );
      $footerData = array(
        "jsFiles" => array('admin-login.js','products.js')
      );
      $viewData = array(
        "viewName" => "admin-login",
              "viewData" => array(),
        "headerData" => $headerData,
        "footerData" => $footerData 
      );
      $this->load->view('seller-template',$viewData);

  }
}
?>