<?php include('partials/header.php'); ?>
<!-- content start -->


<h3>adm page</h3>

        

  <h1>Student Registration Form</h1>
  <form action="/submit-registration" method="post" class="form-container">
            <h2>Personal Information</h2>

            <div class="form-group">
            <label for="app_no" class="form-label">Application Number:</label>
            <input class="form-input" type="tel" id="app_no" placeholder="000-000" name="app_no" pattern="[0-9]{6}" required>
            </div>

            <div class="form-group">
            <label for="batch_yr" class="form-label">Batch Year:</label>
            <input class="form-input" type="tel" id="batch_yr" name="batch_yr" placeholder="2000" pattern="[0-9]{4}" required>
            </div>

            <div class="form-group">
            <label for="stdt_name" class="form-label">Student Full Name:</label >
            <input class="form-input" type="text" id="stdt_name" name="stdt_name" required>
            </div>

            <div class="form-group">
            <label for="aadhaar" class="form-label">Student Aadhaar No:</label>
            <input class="form-input" type="tel" id="aadhaar" placeholder="8888-8888-8888" name="aadhaar" pattern="[0-9]{12}" required>
            </div>

            <div class="form-group">
            <label for="father_name" class="form-label">Father's Full Name:</label>
            <input class="form-input" type="text" id="father_name" name="father_name" required>
            </div>

            <div class="form-group">
            <label for="father_occ" class="form-label">Father's Occupation:</label>
            <input class="form-input" type="text" id="father_occ" name="father_occ" required>
            </div>

            <div class="form-group">
            <label for="mother_name" class="form-label">Mother's Full Name:</label>
            <input class="form-input" type="text" id="mother_name" name="mother_name" required>
            </div>

            <div class="form-group">
            <label for="relg" class="form-label">Religion:</label>
            <input class="form-input" type="text" id="relg" name="relg" required>
            </div>

            <div class="form-group">
            <label for="caste" class="form-label">Caste:</label>
            <input class="form-input" type="text" id="caste" name="caste" required>
            </div>

            <div class="form-group">
            <label for="subcaste" class="form-label">Sub-Caste:</label>
            <input class="form-input" type="text" id="subcaste" name="subcaste" required>
            </div>

            <div class="form-group">
            <label for="phone_number" class="form-label">Father's Phone Number:</label>
            <input class="form-input" type="tel" id="phone_number" placeholder="88888-88888" name="phone_number" pattern="[0-9]{10}" required>
            </div>

            <div class="form-group">
            <label for="mother_tong" class="form-label">Mother Tongue:</label>
            <input class="form-input" type="text" id="mother_tong" name="mother_tong" required>
            </div>

            <div class="form-group">
            <label for="gender" class="form-label">Gender:</label>
            <select class="select-menu" id="gender" name="gender" required>
                <option hidden>Select Gender</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="o">Others</option>
                </select>
            </div>

      
            <div class="form-group">
            <label for="class" class="form-label">Class:</label>
            <select class="select-menu" id="class" name="class" required>
                <option hidden>Select Class</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>

                </select>
            </div>

            <div class="form-group">
            <label for="section" class="form-label">Section:</label>
            <select class="select-menu" id="section" name="section" required>
                <option hidden>Select Section</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="C">D</option>

                </select>
            </div>

            <div class="form-group">
            <label for="birth_date" class="form-label">Date of Birth:</label>
            <input  type="date" class="form-cal" id="birth_date" name="birth_date" required>
            </div>

            <div class="form-group">
            <label for="state" class="form-label">State:</label>
            <select class="select-menu" id="state" name="state" required>
                <option hidden>Select State</option>
                <option value="AP">Andhra Pradesh</option>
                <option value="AR">Arunachal Pradesh</option>
                <option value="AS">Assam</option>
                <option value="BR">Bihar</option>
                <option value="CT">Chhattisgarh</option>
                <option value="GA">Gujarat</option>
                <option value="HR">Haryana</option>
                <option value="HP">Himachal Pradesh</option>
                <option value="JK">Jammu and Kashmir</option>
                <option value="GA">Goa</option>
                <option value="JH">Jharkhand</option>
                <option value="KA">Karnataka</option>
                <option value="KL">Kerala</option>
                <option value="MP">Madhya Pradesh</option>
                <option value="MH">Maharashtra</option>
                <option value="MN">Manipur</option>
                <option value="ML">Meghalaya</option>
                <option value="MZ">Mizoram</option>
                <option value="NL">Nagaland</option>
                <option value="OR">Odisha</option>
                <option value="PB">Punjab</option>
                <option value="RJ">Rajasthan</option>
                <option value="SK">Sikkim</option>
                <option value="TN">Tamil Nadu</option>
                <option value="TG">Telangana</option>
                <option value="TR">Tripura</option>
                <option value="UT">Uttarakhand</option>
                <option value="UP">Uttar Pradesh</option>
                <option value="WB">West Bengal</option>
                <option value="AN">Andaman and Nicobar Islands</option>
                <option value="CH">Chandigarh</option>
                <option value="DN">Dadra and Nagar Haveli</option>
                <option value="DD">Daman and Diu</option>
                <option value="DL">Delhi</option>
                <option value="LD">Lakshadweep</option>
                <option value="PY">Puducherry</option>
            </select>
                
            </div>

            <div class="form-group">
            <label for="address" class="form-label">Address:</label>
            <textarea id="address" name="address" placeholder="D/No: , Street Name , Landmark , City , District" required></textarea>
            </div>

            <div class="form-group">
            <label for="pincode" class="form-label">Pin Code:</label>
            <input class="form-input" type="tel" id="pincode" name="pincode" placeholder="000000" pattern="[0-9]{6}" required>
            </div>

            <div class="form-group">
            <label for="nationality" class="form-label">Nationality:</label>
            <select class="select-menu" id="nationality" name="nationality" required>
                <option hidden>Select Nationality</option>
                <option value="IND">Indian</option>
                <option value="NRI">NRI</option>
                
                </select>
            </div>

            <div class="form-group">
            <label for="hostel" class="form-label">Hostel Facility:</label>
            <input type="checkbox" id="hostel" name="hostel">
            </div>


            <div class="form-group">
            <label for="bus" class="form-label">Bus Facility:</label>
            <input type="checkbox" id="bus" name="bus">
            </div>

            
            
            <h2>Previous School Details</h2>
            <div class="form-group">
            <label for="previous_school_name" class="form-label">Previous School Name:</label>
            <input class="form-input" type="text" id="previous_school_name" name="previous_school_name">
            </div>

            
            <div class="form-group">
            <label for="prev_class" class="form-label">Previous Class:</label>
            <select class="select-menu" id="prev_class" name="prev_class"  required>
                <option hidden>Select Class</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                </select>
            </div>

            <div class="form-group">
            <label for="previous_add" class="form-label">Previous School Address:</label>
            <textarea id="prev_add" name="address" placeholder="City , State"></textarea>
            </div>
            
            
            <button type="submit" class="button1">Submit</button>



    </form>  

<!-- content end -->
<?php include('partials/footer.php'); ?>