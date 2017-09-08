<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Compare extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("category_model");
		$this->load->model("product_model");
		$productList = $this->product_model->allProducts();
		$categoryList = $this->category_model->generateNavBar(7);
		$headerData = array(
			"pageTitle" => "Product Compare",
			"stylesheet" => array("Product_Compare.css"),
			"categoryList" =>$categoryList
		);
		$footerData = array(
			"jsFiles" => array("Product_Compare.js")
		);
		$viewData = array(
			"viewName" => "product-compare",
            "viewData" => array("catList"=>$productList),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
