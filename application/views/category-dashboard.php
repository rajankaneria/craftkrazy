
<div class="container" style="width: 100% !important">
 <div class="row">

<div class="container">
 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Category Mangement</div>      
      <div class="page-button"><a class="waves-effect waves-light btn" id="addCategoryBtn">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1">
   		<tr>
        <th>Category Name</th>    
        <th>Category Image</th>       
        <th>Actions</th>
   		</tr>
      <?php foreach ($categoryList as $key => $categoryRow) { ?>
       <tr data-catid="<?php echo $categoryRow['mc_id']; ?>">       
        <td><?php echo $categoryRow['mc_name']; ?></td>  
        <td><img width="300" height="200" src="<?php echo base_url() ?>html/images/category/<?php echo $categoryRow['mc_image']; ?>"></td>      
           <td class="blog-btn">
           <a data-catid="<?php echo $categoryRow['mc_id']; ?>" class="btn-floating waves-effect waves-light red category_delete_btn"><i class="material-icons">delete</i></a>
              <a data-catid="<?php echo $categoryRow['mc_id']; ?>" class="btn-floating waves-effect waves-light blue-grey category-edit-btn"><i class="material-icons">mode_edit</i></a>
            </td>          
      </tr>
      <?php } ?>

   	</table>
   </div>
  </div>  
  </div>
  </div>
  </div>

<!-- Modal Structure -->
  <div id="addModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addCategory"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendCategoryData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updatecategorydata" href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
