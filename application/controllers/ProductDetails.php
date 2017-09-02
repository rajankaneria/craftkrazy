<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductDetails extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("product_model");
		$allCats = $this->product_model->getAllMainCat();
		foreach ($allCats as $key => $catRow) {
			$subCats = $this->product_model->getAllParentCatByMainCat($catRow["mc_id"]);
			$allCats[$key]["subCategory"] = $subCats;
		}
		$productNavHtml = "";
		foreach ($allCats as $key => $catRow) {
			$productNavHtml .= $this->load->view("mainCatBox",$catRow,TRUE);
		}


		$headerData = array(
			"pageTitle" => "Product Details",
			"stylesheet" => array('xzoom.css', 'ProductDetails.css'),
			"productNav" => $productNavHtml
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