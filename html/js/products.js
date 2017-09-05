
  $(function() {
    var baseurl=$("#base_url").val();
    $('.modal').modal();
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
      $("#addModal").model('open');
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
  $("#product_delete_bttn").on("click",function(){
    var proID=$(this).data("proID");
    if(confirm("Do You Want to Delete this Product"))
    $.post(baseurl+"product/deleteProduct"+proID,function(data){
      $("tr[data-proid="+proID+"]").remove();
    });

  });
 /* Update Products*/
  $("#updateBtn").on("click",function(){
    var productData=new FormData($("#updateForm")[0]);
    $.ajax({
        url:baseurl+"product/updateProduct",
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
  $("$editBtn").on("click",function(){
    $("#editModal .modal-content").html("");
    $("#editModal").modal('open');
    var proID=$(this).data("proID");
    $.post(baseurl+"product/updateProduct"+proID,function(data){
      $("#editModal .modal-content").html(data);
      Materialize.updateTextFields();
    });
    
  });



});
