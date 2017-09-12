
<div class="container" style="width: 100% !important">
 <div class="row">
  <div class="col s3 m3" style="background: black;width: 15%;height: 967px;max-height: 100%;margin: 0 auto !important;
    display: block;margin-top: 0.5rem !important">
 <div>
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a href="#!">Products<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="#!">link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
  </div>

<div class="col s9 m9">
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
      <a  id="updatecategorydata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
