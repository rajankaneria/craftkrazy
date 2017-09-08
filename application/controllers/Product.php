<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("category_model");
		$this->load->model("product_model");
		$categoryList = $this->category_model->generateNavBar(7);

		$headerData = array(
			"pageTitle" => "Product",
			"stylesheet" => array(),
			"categoryList" =>$categoryList
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
		$this->load->model("category_model");

		$output = $this->product_model->getProductDetails($productID);
	

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


	/* Seller add/edit/delete/products */
	public function addProduct()
	{
		$this->load->model("product_model");
		$result=array(
					"mc_id"=>$_POST["mc_id"],
					"pc_id"=>$_POST["pc_id"],
					"mc_id"=>$_POST["mc_id"],
					"cc_id"=>$_POST["cc_id"],
					"sc_id"=>$_POST["sc_id"],
					"product_name"=>$_POST["product_name"],									
					"discounted_price"=>$_POST["discounted_price"],
					"price"=>$_POST["price"],	
					"description"=>$_POST["description"],
					"quantity"=>$_POST["quantity"]							
			);

		$proID = $this->product_model->addProduct($result);

		//Define the file names with blog id with same extension which has been uploaded
		$product_image = $proID."_product.".pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);		
		$updateData = array(
			"product_image" => $product_image			
		);

		// update the name of the images in the database
		$this->product_model->updateProduct($updateData,$proID);

		//set configuration for the upload library
		$config['upload_path'] = 'C:\xampp\htdocs\craftkrazy\html\images\products';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $proID."_product";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('product_image');
	}
	public function updateProduct()
	{
		$proID=$_POST['proID'];
		$this->load->model('product_model');
		

		$product_image = $proID."_product.".pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);

		$result=array(
					"mc_id"=>$_POST["mc_id"],
					"pc_id"=>$_POST["pc_id"],
					"mc_id"=>$_POST["mc_id"],
					"cc_id"=>$_POST["cc_id"],
					"sc_id"=>$_POST["sc_id"],
					"product_name"=>$_POST["product_name"],									
					"discounted_price"=>$_POST["discounted_price"],
					"price"=>$_POST["price"],
					"description"=>$_POST["description"],
					"quantity"=>$_POST["quantity"],				
					"product_image"	=>$product_image				
			);
		$this->product_model->updateProduct($result,$proID);


			//set configuration for the upload library
		$config['upload_path'] = 'C:\xampp\htdocs\craftkrazy\html\images\blog';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['overwrite'] = TRUE;
	    $config['encrypt_name'] = FALSE;
	    $config['remove_spaces'] = TRUE;
	    
	    //set name in the config file for the feature image
	    $config['file_name'] = $proID."_product";
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('product_image');	

	}

	public function deleteProduct($proID)
	{
		$this->load->model("product_model");
		$this->product_model->deleteProduct($proID);
	}
	public function allProducts()
	{
		$this->load->model("product_model");
		$result=$this->product_model->allProducts();
		echo json_encode($result);
	}
	public function getProduct($proID)
	{
		$this->load->model("product_model");
		$productData=$this->product_model->getProduct($proID);
		$mainCategoryList=$this->product_model->getAllMainCat();

		//get parent category list from main category id
		$parentCategoryList = $this->product_model->getAllParentCatByMainCat($productData["mc_id"]);
		//get child category list from parent category id
		$childCategoryList = $this->product_model->getChildCat($productData["pc_id"]);
		//get sub category list from child category id
		$subCategoryList = $this->product_model->getSubcatByChildcat($productData["cc_id"]);

		$categoryList = array(
			"mainCategory" => $mainCategoryList,
			"parentCategory" => $parentCategoryList,
			"childCategory" => $childCategoryList,
			"subCategory" => $subCategoryList
		);


		$this->load->view('updateProduct',array('proData'=>$productData,"categoryList"=>$categoryList));
	}
	

	public function deleteCartProduct($productID){
		//delete specific product from shopping cart
		$shoppingCart = $this->session->userdata("shoppingCart");
		$productKey = array_search($productID, $shoppingCart);
		unset($shoppingCart[$productKey]);
		$this->session->set_userdata("shoppingCart",$shoppingCart);
	}

	public function addProductToCart($productID){
		//add product to shopping cart
		if(!$this->session->userdata("shoppingCart")){
			$shoppingCart = array($productID);
    	}else{
    		$shoppingCart = $this->session->userdata("shoppingCart");
    		array_push($shoppingCart, $productID);
    	}
    	$this->session->set_userdata("shoppingCart",$shoppingCart);
	}















}
