<?php 
/**
* 
*/
class Admin extends CI_Controller
{
  public function index()
  {
    $this->load->model("product_model");
    $productsData=$this->product_model->allProduct();

    $headerData = array(
      "pageTitle" => "Dashboard",
      "stylesheet" => array('dashboard.css')     
    );
    $footerData = array(
      "jsFiles" => array('products.js')
    );
    $viewData = array(
      "viewName" => "dashboard",
      "viewData" => array("productsData"=>$productsData),
      "headerData" => $headerData,
      "footerData" => $footerData 
    );
    $this->load->view('admin-template',$viewData);
  }
}
?>