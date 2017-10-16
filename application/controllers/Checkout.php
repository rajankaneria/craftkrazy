<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("category_model");
		$this->load->model("product_model");
		$categoryList = $this->category_model->generateNavBar(7);
		$productList = $this->product_model->getCartProducts();
		foreach($productList as $key=>$productRow){
			$productList[$key]["productQuantity"] = 2;
		}

		$headerData = array(
			"pageTitle" => "Checkout",
			"stylesheet" => array('checkout.css'),
			"categoryList" =>$categoryList
		);
		$footerData = array(
			"jsFiles" => array('checkout.js')
		);
		$viewData = array(
			"viewName" => "checkout",
            "viewData" => array("productList" => $productList),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

?>	