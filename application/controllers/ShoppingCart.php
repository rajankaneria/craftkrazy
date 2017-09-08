<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCart extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("category_model");
		$this->load->model("product_model");
		$categoryList = $this->category_model->generateNavBar(7);
		$productList = $this->product_model->getCartProducts();

		$headerData = array(
			"pageTitle" => "Shopping Cart",
			"stylesheet" => array('shoppingCart.css'),
			"categoryList" =>$categoryList
		);
		$footerData = array(
			"jsFiles" => array('shoppingCart.js')
		);
		$viewData = array(
			"viewName" => "shopping-cart",
            "viewData" => array("productList" => $productList),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

?>	