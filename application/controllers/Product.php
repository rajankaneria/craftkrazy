<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
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
			"pageTitle" => "Product",
			"stylesheet" => array(),
			"productNav" => $productNavHtml
		);
		$footerData = array(
			"jsFiles" => array('products.js')
		);
		$viewData = array(
			"viewName" => "products",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function productDetails($productID){
		$this->load->model("product_model");
		$output = $this->product_model->getProductDetails($productID);


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
            "viewData" => array("productData"=>$output),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function mainCatDetails($mainCatID)
	{
		$this->load->model("product_model");
		$output=$this->product_model->getMainCatDetails($mainCatID);
		var_dump($output);
	}
	public function mainCatAllDetails()
	{
		$this->load->model("product_model");
		$output=$this->product_model->getAllMainCat();
		var_dump($output);
	}
	public function parentCatDetails($parentCatID)
	{
		$this->load->model("product_model");
		$output=$this->product_model->getParentCatDetails($parentCatID);
		var_dump($output);

	}
	public function parentCatAllDetails()
	{	
		$this->load->model("product_model");
		$output=$this->product_model->getAllParentCat();
		var_dump($output);
	}
	public function childCateDetails($childCatID)
	{
		$this->load->model("product_model");
		$output=$this->product_model->getChildCat($childCatID);
		var_dump($output);
	}
	public function childCatAllDetails()
	{
		$this->load->model("product_model");
		$output=$this->product_model->getChildAll();
		var_dump($output);
	}
	public function productNav(){
		$this->load->model("product_model");
		$allCats = $this->product_model->getAllMainCat();
		foreach ($allCats as $key => $catRow) {
			$subCats = $this->product_model->getAllParentCatByMainCat($catRow["mc_id"]);
			$allCats[$key]["subCategory"] = $subCats;
		}
		return $allCats;
	}
	public function productList(){
		$this->load->model("product_model");
		$categoryList = $this->product_model->allProducts();
		var_dump($categoryList);
	}
}
