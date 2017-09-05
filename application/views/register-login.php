<div class="container login-form-area">
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Seller Login Form</h1><!-- <span>Pen <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span> -->
</div>
<!-- <div class="rerun"><a href="">Rerun Pen</a></div> -->
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form name="Login" method="post">
      <div class="input-container">
        <input id="a_name"  name="a_name" type="#{type}" class="validate" required="">
        <label for="a_name">User Name</label>
        <!-- <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Username</label> -->
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input id="a_pass" name="a_pass" type="password" class="validate" required="">
          <label for="a_pass">Password</label>

        <!-- <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Password</label> -->
        <div class="bar"></div>
      </div>
      <div class="button-container">
      <input id="login" name="login" type="button" class="waves-effect waves-light btn btn-login" value="Login">       
        <!-- <button><span>Go</span></button> -->
      </div>
      <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form name="Register" method="post">
      <div class="input-container">
          <input id="company_name" name="company_name" type="#{type}" class="validate" required="true">
          <label for="company_name">Comapany Name</label>
        <!-- <input type="#{type}" id="#{label}" required="required"/>
        <label for="#{label}">Username</label> -->
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input id="contact_person" name="contact_person" type="#{type}" class="validate" required="true">
        <label for=" contact_person">Contact Person</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
          <input id="email" name="email" type="#{type}" class="validate" required="true">
          <label for="email">Email</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
        <input id="mobile" name="mobile" type="#{type}" class="validate" required="true">
        <label for="mobile">Mobile</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
        <input id="landline" name="landline" type="#{type}" class="validate" required="true">
        <label for="mobile">Landline</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
        <input id="address" name="address" type="#{type}" class="validate" required="true">
        <label for="address">Address</label>
        <div class="bar"></div>
      </div>
      
      <div class="input-container">
        <input id="gcm_id" name="gcm_id" type="#{type}" class="validate" required="true">
        <label for="gcm_id">Gcm Id</label>
        <div class="bar"></div>
      </div>
    
      <div class="input-container">
        <input id="password" name="password" type="#{type}" class="validate" required="true">
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <input id="register" name="register" type="button" class="waves-effect waves-light btn btn-signup" value="Sign Up">
      </div>
    </form>
  </div>
</div>
</div> 
