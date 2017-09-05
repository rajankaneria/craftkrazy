<div class="modal-title">Add Blog</div>
<div class="row">
    <form class="col s12" method="post" id="addProductForm" enctype="multipart/form-data">
      <div class="row">      
        <div class="input-field col s6">
          <input id="title" name="title" type="text" class="validate">
          <label for="title">Title</label>
        </div>

         <div class="input-field col s6">
          <input id="author" name="author" type="text" class="validate">
          <label for="author">Author</label>
        </div>
      </div> 

      <div class="row">
        <div class="col s6 xs-12">          
          <div class="row">      
            <div class="input-field col s6">          
              <label for="feature-image">Featured Image</label>
            </div>
          </div>
          <div class="row">      
            <div class="input-field col s6 xs-12">          
              <input id="feature-image" name="feature-image" type="file" class="validate">
            </div>
          </div>
        </div>
      <div class="col s6 xs-12">          
          <div class="row">      
            <div class="input-field col s6">          
              <label for="blog-image">Blog Image</label>
            </div>
          </div>
          <div class="row">      
            <div class="input-field col s6 xs-12">          
              <input id="blog-image" name="blog-image" type="file" class="validate">
            </div>
          </div>
        </div>
      </div>              

        <div class="row">                 
             <label for="content">Content</label>
              <textarea id="content" name="content" style="height:12rem !important"></textarea>
            
        </div>    
    </form>
  </div>