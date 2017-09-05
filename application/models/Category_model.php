<?php 
class Category_model extends CI_Model{

	public function getMainCategoryLimitBy($count){
		$query = $this->db->query("select * from main_category order by mc_id limit $count");
		$result = $query->result_array();
		foreach($result as $key=>$rowData){
			$result[$key]["subCategory"] = $this->getAllParentCategory($rowData["mc_id"]);
		}
		return $result;
	}

	public function getMainCategoryAfter($from){
		$totalCat = $this->mainCatCount();
		$query = $this->db->query("select * from main_category order by mc_id limit $from,$totalCat");
		$result = $query->result_array();
		foreach($result as $key=>$rowData){
			$result[$key]["subCategory"] = $this->getAllParentCategory($rowData["mc_id"]);
		}
		return $result;
	}

	public function mainCatCount(){
		$query = $this->db->query("select * from main_category");
		$count = $query->num_rows();
		return $count;
	}

	public function getAllParentCategory($mcID){
		$query = $this->db->query("select * from parent_category where mc_id='$mcID'");
		$result = $query->result_array();
		return $result;
	}

	public function generateNavBar($limit){
		$displayList = $this->getMainCategoryLimitBy($limit);
		$moreList = $this->getMainCategoryAfter($limit);
		return array("catList"=>$displayList,"moreList"=>$moreList);
	}

}