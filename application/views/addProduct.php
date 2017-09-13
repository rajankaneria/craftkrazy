

<div class="modal-title">Add Products</div>
<div class="row">
    <form class="col s12" method="post" id="addProductForm" enctype="multipart/form-data">
      <div class="row">      
        <div class="input-field col s12">
          <select name="mc_id" id="mc_id" class="main-category">
            <option value="" disabled selected>Choose Main Category</option>
            <?php foreach($categoryList as $key=>$categoryRow){ ?>
            <option value="<?php echo $categoryRow['mc_id']; ?>"><?php echo $categoryRow['mc_name']; ?></option>
            <?php } ?>
          </select>  
          <label>Main Category</label>
        </div>
        </div>

       <div class="row"> 
        <div class="input-field col s12">
          <select name="pc_id" id="pc_id" class="parent-category">
            <option value="" disabled selected>Choose Parent Category</option>            
          </select>
          <label>Parent Category</label>
        </div>
        </div>

        <div class="row">      
        <div class="input-field col s12">
          <select name="cc_id" id="cc_id" class="child-category">
            <option value="" disabled selected>Choose Sub Category</option>           
          </select>
          <label>Sub Category</label>  
        </div>
        </div>

        <div class="row"> 
        <div class="input-field col s12">
          <select name="sc_id" id="sc_id" class="sub-category">
            <option value="" disabled selected>Choose Child Category</option>           
           
          </select>
          <label>Child Category</label>
        </div>
        </div>

        <div class="row lable-row">      
        <div class="input-field col s12">
         <label>Product Name</label>
         <input type="text" name="product_name" id="product_name">
        </div>
        </div>

         <div class="row lable-row"> 
         <div class="input-field col s12">
         <label>Quantity</label>
         <input type="number" name="quantity" id="quantity">
        </div>
        </div>   
        <div class="row" style="margin-bottom: 0px !important">
        <div class="row" style="margin-bottom: 32px !important">      
        <div class="input-field col s6">
         <label>Product Image</label>         
        </div>        
        </div>
        <div class="row">
        <div class="input-field col s12">
        <input type="file" name="product_image" id="product_image">
        </div>        
        </div> 
        </div>
        <div class="row lable-row">      
         <div class="input-field col s12">
        <label>Discounted Price</label>
         <input type="text" name="discounted_price" id="discounted_price">
        </div>
        </div>

         <div class="row lable-row"> 
        <div class="input-field col s12">
        <label>Product Price</label>
         <input type="text" name="price" id="price">
        </div>
        </div>          

        <div class="row">                 
             <label for="content">Descriptions</label>
            <textarea id="description" name="description" style="height:12rem !important"></textarea>            
        </div> 
        <div class="row"> 
        <input type="text" name="tag" id="tag" class="chips">           
        </div>
    </form>
  </div>
