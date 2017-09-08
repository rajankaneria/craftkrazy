<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("category_model");
		$this->load->model("product_model");
		$categoryList = $this->category_model->generateNavBar(7);

		$headerData = array(
			"pageTitle" => "Checkout",
			"stylesheet" => array('checkout.css'),
			"categoryList" =>$categoryList
		);
		$footerData = array(
			"jsFiles" => array()
		);
		$viewData = array(
			"viewName" => "checkout",
            "viewData" => array('checkout.js'),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

?>	