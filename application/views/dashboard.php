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
      <div class="page-title">Products Mangement</div>      
      <div class="page-button"><a class="waves-effect waves-light btn" id="addProductBtn">Add</a></div>
  </div>
   <div class="page-content">
   	<table border="1">
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
      <?php foreach ($productsData as $key => $productRow) { ?>
       <tr data-proid="<?php echo $productRow['product_id']; ?>">
        <td><?php echo $productRow['mc_id']; ?>>><?php echo $productRow['pc_id']; ?>>><?php echo $productRow['cc_id']; ?> >> <?php echo $productRow['sc_id']; ?> </td>
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

   	</table>
   </div>
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
