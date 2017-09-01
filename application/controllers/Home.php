<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
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

		$productList = $this->product_model->allProducts();


		$headerData = array(
			"pageTitle" => "Home",
			"stylesheet" => array("home.css"),
			"productNav" => $productNavHtml
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
