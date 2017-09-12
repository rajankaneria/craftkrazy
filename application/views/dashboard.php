
<div class="container">
 <div class="row">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Products Mangement</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addProductBtn">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table">
    <thead>
   		<tr>
        <th>Category</th>
        <!-- <th>Parent Category</th>
        <th>Sub Category</th>
        <th>Sub to sub Category</th> -->
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Price</th>
        <th>Discounted price</th>
        <th>Quantity</th>
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($productsData as $key => $productRow) { ?>
      <tr data-proid="<?php echo $productRow['product_id']; ?>">
        <td class="category-list"><?php echo $productRow['mc_name']; ?> > <?php echo $productRow['pc_name']; ?> > <?php echo $productRow['cc_name']; ?></td>
        <td><?php echo $productRow['product_name']; ?></td>
        <td><?php echo $productRow['product_code']; ?></td>
        <td><?php echo $productRow['price']; ?></td>
        <td><?php echo $productRow['discounted_price']; ?></td>
        <td><?php echo $productRow['quantity']; ?></td>
          <td class="right-align blog-btn">
          <a data-proid="<?php echo $productRow['product_id']; ?>" class="btn-floating waves-effect waves-light blue-grey blog-view-btn"><i class="fa fa-eye" aria-hidden="true"></i></a>
          <a data-proid="<?php echo $productRow['product_id']; ?>" class="btn-floating waves-effect waves-light red product_delete_btn"><i class="material-icons">delete</i></a>
              <a data-proid="<?php echo $productRow['product_id']; ?>" class="btn-floating waves-effect waves-light blue-grey product-edit-btn"><i class="material-icons">mode_edit</i></a>
            </td>
          </tr>

      <?php } ?>
      </tbody>
   	</table>
   </div>
  </div>
 </div>  
</div>   

<!-- Modal Structure -->
  <div id="addModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addProduct",$categoryList); ?>
    </div>
    <div class="modal-footer">
      <a id="sendProductData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateproductdata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
