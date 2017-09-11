<div class="modal-title">Update Category</div>
<div class="row">
    <form class="col s12" method="post" id="updateCatForm" enctype="multipart/form-data">
      <div class="row lable-row">      
        <div class="input-field col s12">
         <label>Category Name</label>
         <input type="text" name="mc_name" id="mc_name"
          value="<?php echo $mc_name; ?>">
        </div>
        </div>  
        <div class="row" style="margin-bottom: 0px !important">
        <div class="row" style="margin-bottom: 32px !important">      
        <div class="input-field col s6">
         <label>Product Image</label>    
        <img width="300" height="200" src="<?php echo base_url() ?>html/images/category/<?php echo $mc_image; ?>">
        </div>        
        </div>
        <div class="row">
        <div class="input-field col s12">
        <input type="file" name="mc_image" id="mc_image">
        </div>        
        </div> 
        </div>        
        <input type="hidden" name="catID" id="catID" value="<?php echo $mc_id; ?>">  
    </form>
  </div>
