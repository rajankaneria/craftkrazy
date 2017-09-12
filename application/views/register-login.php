  <div class="pen-title">
  <!-- <h5>SELLER HUB</h5> -->
  </div>
<!-- <div class="rerun"><a href="">Rerun Pen</a></div> -->
<div class="container-area">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Seller Login</h1>
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

    <div class="row center">
      <div class="toggle">
      <p>Create your Account by &nbsp; <a href="#">Sign Up</a> &nbsp; here.</p>
      </div>
    </div>
  </div>

  <!-- Register Form -->

  <div class="card alt">
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form name="Register" method="post">

      <div class="input-container">
        <input id="contact_person" name="contact_person" type="#{type}" class="validate" required="true">
        <label for="full_name">Full Name</label>
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
        <input id="password" name="password" type="password" class="validate" required="true">
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <input id="register" name="register" type="button" class="waves-effect waves-light btn btn-signup" value="Sign Up">
      </div>
    </form>
  </div>
</div>
