<?php 
class Product_model extends CI_Model{
    
    public function getAll(){
        // get all rows with all columns from  product details and join with product image on product_id
        $query = $this->db->query("select * from product_details");
        $result = $query->result_array();
        return $result;
    }

    public function getProductDetails($product_id){
        $query = $this->db->query("select product_details.*,seller.contact_person   from product_details  JOIN seller  ON product_details.seller_id=seller.seller_id where product_id='$product_id'");
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
        $query=$this->db->query("select * from  main_category where mc_id='$mainCatID' and mc_status=1 ");
        $result=$query->row_array();
        return $result;
        // get main category details

    }
    public function getAllMainCat(){
        $query=$this->db->query("select * from main_category where mc_status = 1");
        $result=$query->result_array();        
        return $result;
    }

    public function getParentCatDetails($parentCatID){
        // get parent category details
        $query=$this->db->query("select * from parent_category where mc_id ='$parentCatID' and pc_status = 1");
        $result=$query->row_array();
        return $result;
    }
    public function getAllParentCat(){
        $query=$this->db->query("select * from parent_category where pc_status=1");
        $result=$query->result_array();
        return $result;

    }

    public function getAllParentCatByMainCat($mainCatID){
        $query=$this->db->query("select * from parent_category where pc_status=1 and mc_id='$mainCatID'");
        $result=$query->result_array();
        return $result;

    }

    public function getChildCat($parentCatID){
        $query=$this->db->query("select * from child_category where pc_id ='$parentCatID' and cc_status=1 ");
        $result=$query->row_array();
        return$result;
    }
    public function getChildAll(){

        $query=$this->db->query("select * from child_category where cc_status=1");
        $result=$query->result_array();
        return $result;
    }

    public function getProductByMainCat($mainCatID){
        $query = $this->db->query("select * from product_details where mc_id='$mainCatID'");
        $result = $query->result_array();
        foreach($result as $key=>$productRow){
            $productImages = $this->getProductImage($productRow["product_id"]);
            $result[$key]["productImageArray"] = $productImages;
        }
        return $result;
    }


    public function getNonEmptyCategories(){
        $query = $this->db->query("select distinct mc_id from product_details");
        $result = $query->result_array();
        $output = [];
        foreach ($result as $key => $categoryRow) {
            $output[] = $this->getMainCatDetails($categoryRow["mc_id"]);
        }
        return $output;        
    }

    public function allProducts(){
        $categoryList = $this->getNonEmptyCategories();
        foreach ($categoryList as $key => $categoryRow) {
            $mcID = $categoryRow["mc_id"];
            $productList = $this->getProductByMainCat($mcID);
            $categoryList[$key]["product_list"] = $productList;
        }
        return $categoryList;
    }

    /* Seller add/edit delete products */
    public function addProduct($pro_data)
    {
        $query=$this->db->insert("product_details",$pro_data);       
        $id=$this->db->insert_id();
        return $id;

    }
    public function updateProduct($pro_data,$pro_id)
    {
        $this->db->where('product_id',$pro_id);
        $this->db->update("product_details",$pro_data);
    }
    public function deleteProduct($pro_id)
    {
        $this->db->where('product_id',$pro_id);
        $this->db->delete("product_details");
    }
    public function allProduct()
    {
        $query=$this->db->query("select * from product_details");
        $result=$query->result_array();
        return $result;
    }
    public function getProduct($proID)
    {
        $query=$this->db->query("select * from product_details where product_id ='$proID' ");
        $result=$query->row_array();
        return $result;
    }



}