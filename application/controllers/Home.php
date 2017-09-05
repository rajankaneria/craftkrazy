<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("category_model");
		$this->load->model("product_model");
		$productList = $this->product_model->allProducts();
		$categoryList = $this->category_model->generateNavBar(7);
		$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("home.css"),
			"categoryList" =>$categoryList
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "home",
            "viewData" => array("catList"=>$productList),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
