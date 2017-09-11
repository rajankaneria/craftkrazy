<div class="modal-title">Update Category</div>
<div class="row">
    <form class="col s12" method="post" id="updateForm" enctype="multipart/form-data">
      <div class="row lable-row">      
        <div class="input-field col s12">
         <label>Category Name</label>
         <input type="text" name="product_name" id="product_name"
          value="<?php echo $catData['mc_name'] ?>">
        </div>
        </div>  
        <div class="row" style="margin-bottom: 0px !important">
        <div class="row" style="margin-bottom: 32px !important">      
        <div class="input-field col s6">
         <label>Product Image</label>    
         <img src="<?php echo base_url() ?>html/images/Category/<?php echo $catData['mc_image']; ?>" /> 
        </div>        
        </div>
        <div class="row">
        <div class="input-field col s12">
        <input type="file" name="product_image" id="product_image">
        </div>        
        </div> 
        </div>        
        <input type="hidden" name="catID" id="catID" value="<?php echo $catData['mc_id']; ?>">  
    </form>
  </div>
