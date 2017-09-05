 <div class="container reg-container">
 <div class="row">
    <div class="col s12 back-tab" style="padding: 0">
      <ul class="tabs back-tab">
        <li class="tab col s6"><a href="#test1">Sign Up</a></li>
        <li class="tab col s6"><a class="active" href="#test2">Login</a></li>
     
      </ul>
    </div>
    <div id="test1" class="col s12" style="background-color: rgb(255, 255, 255);">
          <div class="row">
          <form class="col s12" name="Register" method="post">
            <div class="row">
             <div class="input-field col s6">
                <input id="company_name" name="company_name" type="text" class="validate" required="">
                <label for="company_name">Comapany Name</label>
              </div>
              <div class="input-field col s6">
                <input id="contact_person" name="contact_person" type="text" class="validate" required="">
                <label for=" contact_person">Contact Person</label>
              </div>
            </div>
              <div class="row">
            <div class="input-field col s6">
                <input id="email" name="email" type="text" class="validate" required="">
                <label for="email">Email</label>
              </div>
              <div class="input-field col s6">
                <input id="password" name="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
             <div class="input-field col s6">
                <input id="mobile" name="mobile" type="text" class="validate" required="">
                <label for="mobile">Mobile</label>
              </div>
              <div class="input-field col s6">
                <input id="landline" name="landline" type="text" class="validate">
                <label for="landline">Landline</label>
              </div>
            </div>
               <div class="row">
             <div class="input-field col s6">
                <input id="address" name="address" type="text" class="validate">
                <label for="address">Address</label>
              </div>
              <div class="input-field col s6">
                <input id="gcm_id" name="gcm_id" type="text" class="validate">
                <label for="gcm_id">Gcm Id</label>
              </div>
            </div>
                <div class="row" style="text-align: center;">      
              <div class="input-field col s12">
                <input id="register" name="register" type="button" class="waves-effect waves-light btn" value="Sign Up">       
              </div>
            </div>

          </form>
        </div>

    </div>
    <div id="test2" class="col s12" style="background-color: rgb(255, 255, 255);">
      <form class="col s12" name="Login" method="post"> 

      <div class="row">
       <div class="input-field col s6">
          <input id="a_name"  name="a_name" type="text" class="validate" required="">
          <label for="a_name">User Name</label>
        </div>
        <div class="input-field col s6">
          <input id="a_pass" name="a_pass" type="password" class="validate" required="">
          <label for="a_pass">Password</label>
        </div>
      </div>

      <div class="row" style="text-align: center;">      
        <div class="input-field col s12">
          <input id="login" name="login" type="button" class="waves-effect waves-light btn" value="Login">       
        </div>
      </div>
      
    </form>
    </div>    
  </div>
  </div>