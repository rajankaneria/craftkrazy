<?php 
class Product_model extends CI_Model{
    
    public function getAll(){
        // get all rows with all columns from  product details and join with product image on product_id
        $query = $this->db->query("select * from product_details");
        $result = $query->result_array();
        return $result;
    }

    public function getProductDetails($product_id){
        $query = $this->db->query("select * from product_details where product_id='$product_id'");
        $result = $query->row_array();
        $productImages = $this->getProductImage($product_id);
        $result["productImageArray"] = $productImages;
        return $result;
    }

    public function getProductImage($product_id){
        $query = $this->db->query("select * from product_image where product_id='$product_id'");
        $result = $query->result_array();
        return $result;
    }

    public function getMainCatDetails($mainCatID){
        $query=$this->db->query("select * from  main_category where mc_id='$mainCatID'");
        $result=$query->row_array();
        return $result;
        // get main category details

    }

    public function getAllMainCat(){

    }

    public function getParentCatDetails($parentCatID){
        // get parent category details
    }

    public function getAllParentCat($mainCatID){

    }




}