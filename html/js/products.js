function initMainCat(){
  var baseurl=$("#base_url").val();
    $('.main-category').off("change");
    $('.main-category').on("change",function () {
        var maincatId = $(this).find('option:selected').val();
        $.ajax({
            url: baseurl+"seller/maicatAjax",
            type: "POST",
            data: "maincatId="+maincatId,
            success: function (response) {
               $("select.parent-category").html(response);
                $('select').material_select();
            },
        });
    }); 
}

function initParentCat(){
  var baseurl=$("#base_url").val();
   /* Parent Category*/
   $('.parent-category').off("change");
    $('.parent-category').on("change",function () {
        var parentcatId = $(this).find('option:selected').val();      
        $.ajax({
            url: baseurl+"seller/parentcatAjax",
            type: "POST",
            data: "parentcatId="+parentcatId,
            success: function (response) {
               $("select.child-category").html(response);
                $('select').material_select();
            },
        });
    });

     /*End*/
}

function initChildCat(){
  var baseurl=$("#base_url").val();
   /* Child Category*/
        $('.child-category').off("change");
        $('.child-category').on("change",function () {
        var childcatId = $(this).find('option:selected').val();      
        $.ajax({
            url: baseurl+"seller/childcatAjax",
            type: "POST",
            data: "childcatId="+childcatId,
            success: function (response) {
               $("select.sub-category").html(response);
                $('select').material_select();
            },
        });
    });
}


  $(function() {
    var baseurl=$("#base_url").val();
    initMainCat();
    initParentCat();
    initChildCat();
     /*End*/
    $('.modal').modal();
    $('select').material_select();

    var Accordion = function(el, multiple) {
      this.el = el || {};
      // more then one submenu open?
      this.multiple = multiple || false;
      
      var dropdownlink = this.el.find('.dropdownlink');
      dropdownlink.on('click',
                      { el: this.el, multiple: this.multiple },
                      this.dropdown);
    };
    
    Accordion.prototype.dropdown = function(e) {
      var $el = e.data.el,
          $this = $(this),
          //this is the ul.submenuItems
          $next = $this.next();
      
      $next.slideToggle();
      $this.parent().toggleClass('open');
      
      if(!e.data.multiple) {
        //show only one menu at the same time
        $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
      }
    }
  
  var accordion = new Accordion($('.accordion-menu'), false);

  $(".product-thumbnail").on("click",function(){
    var imageSrc = $(this).attr("src");
    $("#mainProductImage").attr("src",imageSrc);
    $('#zoom1').zoom();
  });

  /* Seller add/edit/delete Products*/
  /* Add Products*/

  $("#addProductBtn").on("click",function(){
       $("#addModal").modal('open');
  });
  $("#sendProductData").on('click',function(){
    var productData=new FormData($("#addProductForm")[0]);
    $.ajax({
          url:baseurl+"product/addProduct",
          type:'POST',
          processData:false,
          contentType:false,
          data:productData,
          success:function(res){
            alert("Inserted successfully");
            window.location.relode();
          }
    });

  });
  /* Delete Products*/
  $(".product_delete_btn").on("click",function(){
    var proID=$(this).data("proid");
    if(confirm("Do You Want to Delete this Product")){
    $.post(baseurl+"product/deleteProduct/"+proID,function(data){
      $("tr[data-proid="+proID+"]").remove();
    });
  }

  });
 /* Update Products*/
  $("#updateproductdata").on("click",function(){
    var productData=new FormData($("#updateForm")[0]);
    $.ajax({
        url:baseurl+"product/updateProduct/",
        type: 'POST',
        processData: false,
        contentType: false,
        data: productData,
        success: function(res){
          alert('Updated succesfully');
          window.locatio.relode();
        }
    });

  });
  $(".product-edit-btn").on("click",function(){
    $("#editModal .modal-content").html("");
    $("#editModal").modal('open');
    var proID=$(this).data("proid");
    $.post(baseurl+"product/getProduct/"+proID,function(data){
      $("#editModal .modal-content").html(data);
      Materialize.updateTextFields();$('select').material_select();
       initMainCat();
      initParentCat();
      initChildCat();
    });
    
  });

  $(".add-to-cart").on("click",function(){

    var productID=$(this).data("product-id");
    $.post(baseurl+"product/addProductToCart/"+productID,function(data){
        $(".cart-bedge").html(data);
    });
  });
  $(".remove-product").on("click",function(){
    deleteCartProduct($(this).data("product-id"));
  });

});



function deleteCartProduct(productID){
  var baseurl=$("#base_url").val();
  $.post(baseurl+"product/deleteCartProduct/"+productID,function(data){
    $(".cart-bedge").html(data);
    $("#product-"+productID).remove();
    recalculateCart();
  })
  
}