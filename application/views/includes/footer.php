<style type="text/css">
input[type=search]:not(.browser-default){
  color: #fff !important;
}
  input[type=search]::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color: rgba(255,255,255,0.7) !important;
}
input[type=search]:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color: rgba(255,255,255,0.7) !important ;
   opacity:  1;
}
input[type=search]::-moz-placeholder { /* Mozilla Firefox 19+ */
   color: rgba(255,255,255,0.7) !important;
   opacity:  1;
}
input[type=search]:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: rgba(255,255,255,0.7) !important;
}
input[type=search]::-ms-input-placeholder { /* Microsoft Edge */
   color: rgba(255,255,255,0.7) !important;
}


textarea:not(.browser-default):focus:not([readonly]) {
    border-bottom: 1px solid #2669b6 !important
    -webkit-box-shadow:none !important;
    box-shadow: none !important;
}

textarea::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color: rgba(255,255,255,0.7) !important;

}
textarea:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color: rgba(255,255,255,0.7) !important ;
   opacity:  1;
}
textarea::-moz-placeholder { /* Mozilla Firefox 19+ */
   color: rgba(255,255,255,0.7) !important;
   opacity:  1;
}
textarea:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: rgba(255,255,255,0.7) !important;
}
textarea::-ms-input-placeholder { /* Microsoft Edge */
   color: rgba(255,255,255,0.7) !important;
}

input[type=password]:not(.browser-default):focus:not([readonly]){
  border-bottom: 1px solid #2669b6;
  -webkit-box-shadow: 0 1px 0 0 #2669b6;
  box-shadow: 0 1px 0 0 #2669b6;
}
</style>
<?php 

  $this->load->view("loginModal"); 
  $this->load->view("signupModal"); 

?>
<footer class="page-footer blue">
  <div class="container">
    <div class="row">

      <div class="col m4 s12 quick-links">
        <h5 class="white-text">Quick Links</h5>
        <ul>
          <li><a  href="#!">Home</a></li>
          <li><a  href="#!">Categories</a></li>
          <li><a  href="#!">Sell on Craftkrazy</a></li>
          <li><a  href="#!">Contact</a></li>
        </ul>
      </div>

      <div class="col m4 s12 contact-area">
        <h5 class="white-text">Contat Details</h5>
        <address>
          Intelliworkz Business Solutions 
          F - 1003 Titanium City Center, Nr. Sachin Tower, 
          Anandnagar Road, Prahaladnagar, 
          Satellite, Ahmedabad - 380015
        </address>
        <ul>
          <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; (+91) 99099 99099</li>
          <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;info@craftkrazy@gmail.com</a></li>
        </ul>
      </div>

      <div class="col m4 s12 feedback">
        <h5>Give Feedback</h5>
          <form name="feedback" method="post">
            <div class="row">
              <div class="col s12 m12">
              <input type="search" name="search" placeholder="Name" class="name">
              </div>
              <div class="col s12 m12">
              <textarea cols="5" placeholder="Feedback"></textarea>
              </div>
              <div class="col s12 m12">
                <input type="submit" name="feedback" value="Feedback" class="btn btn-feedback">
              </div>
            </div>  
          </form>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2017 all rights reserved. | <a href="#"> www.craftkrzy.com. </a>
    <div class="right">
      <a class="" href="#!">Returns Policy</a>&nbsp; | &nbsp;
      <a class="" href="#!">Privacy Policy</a>&nbsp; | &nbsp;
      <a href="#!">Terms of use</a>
    </div>
    </div>
  </div>
</footer>


	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html> 