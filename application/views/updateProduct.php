<div class="modal-title">Update Products</div>
<div class="row">
    <form class="col s12" method="post" id="updateForm" enctype="multipart/form-data">
      <div class="row">      
        <div class="input-field col s12">
          <select name="mc_id" id="mc_id" class="main-category">
            <option value="" disabled selected>Choose Main Category</option>
            <?php foreach($categoryList["mainCategory"] as $key=>$categoryRow){ ?>
            <option <?php if($proData['mc_id'] == $categoryRow['mc_id']){ echo "selected='selected'"; } ?> value="<?php echo $categoryRow['mc_id']; ?>"><?php echo $categoryRow['mc_name']; ?></option>
            <?php } ?>
          </select>  
          <label>Main Category</label>
        </div>
        </div>

       <div class="row"> 
        <div class="input-field col s12">
          <select name="pc_id" id="pc_id" class="parent-category">
            <option value="" disabled selected>Choose Parent Category</option>
            <?php foreach($categoryList["parentCategory"] as $key=>$categoryRow){ ?>
            <option <?php if($proData['pc_id'] == $categoryRow['pc_id']){ echo "selected='selected'"; } ?> value="<?php echo $categoryRow['pc_id']; ?>"><?php echo $categoryRow['pc_name']; ?></option>
            <?php } ?>
          </select>
          <label>Parent Category</label>
        </div>
        </div>

        <div class="row">      
        <div class="input-field col s12">
          <select name="cc_id" id="cc_id" class="child-category">
            <option value="" disabled selected>Choose Sub Category</option>
            <?php foreach($categoryList["childCategory"] as $key=>$categoryRow){ ?>
            <option <?php if($proData['cc_id'] == $categoryRow['cc_id']){ echo "selected='selected'"; } ?> value="<?php echo $categoryRow['cc_id']; ?>"><?php echo $categoryRow['cc_name']; ?></option>
            <?php } ?>
          </select>
          <label>Sub Category</label>  
        </div>
        </div>

        <div class="row"> 
        <div class="input-field col s12">
          <select name="sc_id" id="sc_id" class="sub-category">
            <option value="" disabled selected>Choose Child Category</option>
            <?php foreach($categoryList["subCategory"] as $key=>$categoryRow){ ?>
            <option <?php if($proData['sc_id'] == $categoryRow['sc_id']){ echo "selected='selected'"; } ?> value="<?php echo $categoryRow['sc_id']; ?>"><?php echo $categoryRow['sc_name']; ?></option>
            <?php } ?>
          </select>
          <label>Child Category</label>
        </div>
        </div>

        <div class="row lable-row">      
        <div class="input-field col s12">
         <label>Product Name</label>
         <input type="text" name="product_name" id="product_name"
          value="<?php echo $proData['product_name'] ?>">
        </div>
        </div>

         <div class="row lable-row"> 
         <div class="input-field col s12">
         <label>Quantity</label>
         <input type="number" name="quantity" id="quantity" value="<?php echo $proData['quantity'] ?>">
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
         <input type="text" name="discounted_price" id="discounted_price" value="<?php echo $proData['discounted_price'] ?>">
        </div>
        </div>

         <div class="row lable-row"> 
        <div class="input-field col s12">
        <label>Product Price</label>
         <input type="text" name="price" id="price" value="<?php echo $proData['price'] ?>">
        </div>
        </div>          

        <div class="row">                 
             <label for="content">Descriptions</label>
            <textarea id="description" name="description" style="height:12rem !important"><?php echo $proData['description'] ?></textarea>            
        </div> 
        <div class="row">  
            <div class="chips chips-initial"></div>
        </div> 
        <input type="hidden" name="proID" value="<?php echo $proData['product_id']; ?>">  
    </form>
  </div>
