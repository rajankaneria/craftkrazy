<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyAccount extends CI_Controller {
	
	public function index()
	{		

		$this->load->model("category_model");
		$this->load->model("product_model");
		$productList = $this->product_model->allProducts();
		$categoryList = $this->category_model->generateNavBar(7);
		$headerData = array(
			"pageTitle" => "My Account",
			"stylesheet" => array("MyAccount.css"),
			"categoryList" =>$categoryList
		);
		$footerData = array(
			"jsFiles" => array("MyAccount.js")
		);
		$viewData = array(
			"viewName" => "my-account",
            "viewData" => array("catList"=>$productList),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
