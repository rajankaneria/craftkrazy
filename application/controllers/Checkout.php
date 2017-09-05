<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	
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
			"pageTitle" => "Checkout",
			"stylesheet" => array('checkout.css'),
			"productNav" => $productNavHtml
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