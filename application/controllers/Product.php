<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Dashboard",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "dashboard",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function productDetails($productID){
		$this->load->model("product_model");
		$output = $this->product_model->getProductDetails($productID);
		var_dump($output);
	}
	public function mainCatDeatails($mainCatID)
	{
		$this->load->modal("product_model");
		$output = $this->product_model->getMainCatDetails($mainCatID);
		var_dump($output);
	}



}
