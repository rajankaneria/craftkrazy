<div class="main">

<div class="row">
  <div class="checkout-area">
  
  <!-- Check-Option -->

  <ul class="collapsible" data-collapsible="accordion">
 <!--    <li>
      <div class="collapsible-header active"><i class="material-icons">chevron_right</i>Step 1: Check Options</div>
        <div class="collapsible-body row">
          <div class="col m6">
            <h5>New Customer</h5><hr>
            <div>
              <h6>Checkout Options:</h6>
              <form>
                <p>
                  <input name="group1" type="radio" id="test2" />
                  <label for="test2">Register Account</label>
                </p>
                <p>
                  <input  name="group1" type="radio" id="test3"/>
                  <label for="test3">Guest Checkout</label>
                </p>
                <p><strong>By creating an account, you:</strong></p>
                <li>1) Get Crafting Credits (Cashback) every time you shop</li>
                <li>2) Can keep track of your Order History</li>
                <li>3) Have a more personalised shopping experience on CraftGully</li>
                <p><button class="btn green">Continue</button></p>
              </form>
            </div>
          </div>
          <div class="col m6">
            <h5>Registered Users Login Here</h5><hr>
            <p>If you have an account, login to get Crafting Credits (Cashback) every time you shop</p>
            <div>
            <form>
              <div class="row">
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">E-mail</label>
                </div>
                <div class="input-field col s6">
                 <input id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
                <div class="input-field col s6 m4">
                 <p><input type="submit" class="btn green" value="Login"></p>
                </div>
                <div class="input-field col s6 m8">
                 <p><a href="#">Forgot password</a></p>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
    </li> -->

<!-- Account & Billing Details -->

    <li>
      <div class="collapsible-header active" id="accountDetails-header"><i class="material-icons">chevron_right</i>Account & Billing Details</div>
      <div class="collapsible-body row">
        <form>
         <div class="col s12 m12">
            <h5>Your Personal Details :</h5><hr>
            <div>
                <div class="row">
                  <div class="input-field col s12 m6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">E-mail</label>
                  </div>
                  <div class="input-field col s12 m6">
                   <input id="mobile" type="text" class="validate" minlength="10" maxlength="10">
                    <label for="mobile">Mobile</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="col m12">
            <h5>Your Address :</h5><hr>
            <div>
              <div class="row">
                <div class="input-field col s12 m12">
                  <input id="CompanyName" type="text" class="validate">
                  <label for="last_name">Company Name</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="city" type="text" class="validate">
                  <label for="last_name">City</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="city" type="text" class="validate">
                  <label for="last_name">Postcode</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="city" type="text" class="validate">
                  <label for="last_name">State</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="city" type="text" class="validate">
                  <label for="last_name">Country</label>
                </div>

                <div class="input-field col s12 m12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Address / Street</label>
                </div>

                <!-- <div class="input-field col s12">
                 <input id="password" type="text" class="validate">
                  <label for="password">Password</label>
                </div> -->
                <div class="input-field col s6 m4">
                 <a href="#" id="accountDetails" class="waves-effect waves-light btn continue-checkout-btn"><i class="material-icons right">trending_flat</i>Continue</a>
                </div>
              </div>
           </div>
          </div>
          </form>
      </div>
    </li>

<!-- Delivery Details -->

    <li>
       <div class="collapsible-header" id="DeliveryDetails"><i class="material-icons">chevron_right</i>Delivery Details</div>
      <div class="collapsible-body row" id="area-1">
        <form>
         <div class="col s12 m12">
            <h5>Deliver To :</h5><hr>
            <div>
                <div class="row">
                  <div class="input-field col s12 m6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">E-mail</label>
                  </div>
                  <div class="input-field col s12 m6">
                   <input id="mobile" type="text" class="validate" minlength="10" maxlength="10">
                    <label for="password">Mobile</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="col m12">
            <h5>Deliver at :</h5><hr>
            <div>
              <div class="row">
                <div class="input-field col s12 m12">
                  <input id="CompanyName" type="text" class="validate">
                  <label for="last_name">Company Name</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="city" type="text" class="validate">
                  <label for="last_name">City</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="city" type="text" class="validate">
                  <label for="last_name">Postcode</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="city" type="text" class="validate">
                  <label for="last_name">State</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="city" type="text" class="validate">
                  <label for="last_name">Country</label>
                </div>

                <div class="input-field col s12 m12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Address / Street</label>
                </div>

                <!-- <div class="input-field col s12">
                 <input id="password" type="text" class="validate">
                  <label for="password">Password</label>
                </div> -->
                <div class="input-field col s6 m4">
                 <a class="waves-effect waves-light btn"><i class="material-icons right">trending_flat</i>Continue</a>
                </div>
              </div>
           </div>
          </div>
          </form>
      </div>
    </li>

<!-- Payment Method -->
    
    <li>
      <div class="collapsible-header"><i class="material-icons">chevron_right</i> Payment Method</div>
      <div class="collapsible-body row">
         <div class="col s12 m12">
            <h5>Payment Method   :</h5><hr>
            <P>Your Payment method wil be as COD (cash on delivery).</P>
            <div>
              <form>
                <div class="row">
                  <div class="input-field col s12 m6">
                    <input name="group1" type="radio" id="test1" checked="true" class="with-gap" />
                    <label for="test1">COD ( Cash on Delivery).</label>
                  </div>
                </div>
              </form> 
            </div>
          </div>
      </div>
    </li>

<!-- Confirm Order -->
    
      <li>
      <div class="collapsible-header"><i class="material-icons">chevron_right</i>Confirm Order</div>
      <div class="collapsible-body row">
         <div class="col s12 m12">
            <h5>Review order & Confirm  :</h5><hr>
           <!--  <P>Your Payment method wil be as COD (cash on delivery).</P> -->
            <div>
              <form>
                <div class="row">
                 <?php var_dump($productList); ?>
                    <table>
                      <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                      </thead>

                      <tbody>
                          <?php foreach ($productList as $key => $productRow) { ?>
                          <tr>
                            <td><?php echo $productRow["product_name"]; ?></td>
                            <td><?php echo $productRow["productQuantity"]; ?></td>
                            <td>Rs. <?php echo $productRow["discounted_price"]; ?></td>
                            <td>Rs. <?php echo $productRow["productQuantity"]*$productRow["discounted_price"]; ?></td>
                          </tr>
                          <?php } ?>
                        
                      </tbody>
                    </table>
                    <div class="grand-order-bg row" style="background: #eee;">
                    <div class="right">
                      <div style="display: table;background: #eee;padding: 25px;text-align: justify;">
                          <div><strong>Sub-total :</strong> &nbsp; Rs. 550</div>
                          <div><strong>Shiping Charges :</strong> &nbsp; Rs. 50</div>
                          <hr>
                          <div><strong>Grand-total :</strong> &nbsp; Rs. 600</div>
                          <br>
                          <div class="row">
                  <a class="waves-effect waves-light btn center"><i class="material-icons right">right</i>Place Order</a>
                </div>
                      </div>
                      </div>
                    </div>
                </div>
                
              </form> 
            </div>
          </div>
      </div>
    </li>

  </ul>
</div>




</div>