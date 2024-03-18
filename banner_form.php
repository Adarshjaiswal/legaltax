 <!-- form -->
  <style>
     #nmbr_show
      {
          display: none;
          color:red;
      }
  </style>
 
 <form name="form1" action="mail_handler.php" method="POST"  enctype="multipart/form-data" >
              <h3>
                <small>
                  <b> Get Started </b>
                </small>
              </h3>
              <div class="row">


                <div class="form-group col">
                  <!-- <label for="exampleInputPassword1"></label> -->
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name" required>
                </div>

                <div class="form-group col">
                  <!-- <label for="exampleInputEmail1">Email address</label> -->
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" name="email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <!-- <label for="exampleInputPassword1">Phone</label> -->
                  <input type="tel" class="form-control" placeholder="Phone" id="mobiletext" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" name="tel">
                  <span id="nmbr_show">Please enter valid number</span>
                </div>

                <div class="form-group col">
                  <!-- <label for="exampleInputPassword1">State</label> 
                  <select  id="state" class="form-control" id="exampleInputPassword1" name="rajye" required>
                    <option value="">State</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                    <option value="Others">Others</option>
                  </select>-->
                  
                   <select  id="state" class="form-control" id="exampleInputPassword1" name="rajye" required>
                    <option value="">Services</option>
                    <option value="Trademark registration">Trademark registration</option>
                    <option value="Company registration">Company registration</option>
                    <option value="Gst registration">Gst registration</option>
                    <option value="Iso certification">Iso certification</option>
                    <option value="Msme registration">Msme registration</option>
                    <option value="Food license">Food license</option>
                    <option value="Startup registration">Startup registration</option>
                    <option value="Import export code">Import export code</option>
                  </select>
                </div>
                </div>
              
                 <div class="row">
                <div class="form-group col">
                <div class="g-recaptcha" data-sitekey="6Le2xZopAAAAAIg_Pzi185OopzMmJUCQ8ZAvRut0"></div>
                </div>
             
                <div class="col-12">
                  <button type="Submit" name="Submit" class="pulse-button"   onclick="phonenumber(document.form1.tel)">Free Consultation </button>
                </div>

                </div>

             


            </form>
            <!-- form -->
            
         <!--<script>
            function phonenumber(inputtxt) {
                var phoneno = /^\d{10}$/; 
                if ($('#mobiletext').length>=10) {
                    return true;
                }
                else {
                    document.getElementById("nmbr_show").style.display="block";
                    return false;
                }
            }
        </script>-->


 
             
            
            <div class="row hide992" bis_skin_checked="1">
              <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 mt-4 user-details" bis_skin_checked="1">
                <p class="text-black  mb-0" style="font-weight: 900;font-size:22px;">2 Lakhs</p>
                <p class="text-black" style="font-weight: 600;">Happy Customers</p>
              </div>
              <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 mt-4 user-details" bis_skin_checked="1">
                <p class="text-black  mb-0" style="font-weight: 900;font-size:22px;">300+</p>
                <p class="text-black" style="font-weight: 600;">Professionals</p>
              </div>
              <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 mt-4 user-details" bis_skin_checked="1">
                <p class="text-black  mb-0" style="font-weight: 900;font-size:22px;">250+</p>
                <p class="text-black" style="font-weight: 600;">Partners</p>
              </div>
            </div>