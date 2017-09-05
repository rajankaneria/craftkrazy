<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductDetails extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("category_model");
		$this->load->model("product_model");
		$categoryList = $this->category_model->generateNavBar(7);
		$headerData = array(
			"pageTitle" => "Product Details",
			"stylesheet" => array('xzoom.css', 'ProductDetails.css'),
			"categoryList" =>$categoryList
		);
		$footerData = array(
			"jsFiles" => array('xzoom.js', 'products.js')
		);
		$viewData = array(
			"viewName" => "products-details",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}

?>	