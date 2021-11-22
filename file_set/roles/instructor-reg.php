<?php
?>
<!Doctype html>
  <html class="animated fadeIn">
    <head>
      <title>Sign Up | CVSU Imus - Online Library</title>
        <link rel="stylesheet" href="../css/instructor-reg.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="shortcut icon" type="image/png" href="../css/pics/favicon.png"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
      <div class="container-transition">  <!-- CONTAINER TRANSITION START(ARIS)-->
        <!--<form class = "box" action = "../login.html" method = "post">(ARIS)-->
        <div class = "box"><!-- BOX DESIGN START(ARIS)-->
          <div class="box-items"><!-- BOX-ITEMS START(ARIS)-->
            <img class="logo" src="../css/pics/cvsulogo.png">
              <div class="logotitle">
                <h2 style="font-size: 60px; text-align: left; margin-left: 20px; font-family: 'Archivo', sans-serif; font-weight: 700">Online Library</h2>
                <p style="font-size: 18px; text-align: left; margin-left: 30px; line-height: 0; letter-spacing: 4px; font-family: 'Archivo', sans-serif; font-weight: 300">Cavite State University - Imus</p>
              </div>
            <div id="rol">
            <h5>Create Account Instructor</h5>
            </div>

            <div id="instructor" class="inv">
              <form method="post" action = "instructor-reg-backend.php">  <!-- INSTRUCTOR FORM(ARIS)-->
                <div id="lft"> <!-- LEFT START(ARIS)-->
                  
                  <!-- NAME(ARIS)-->
                  <div id="nm"> 
                    <h2>Name(S-F-M)</h2>
                      <input class="input-field" type = "text" id = "name" name = "instructor_name" placeholder="Name" pattern=".{6,}" maxlength = "75" required title="6 characters minimum, 75 characters maximum">
                      <i id="userlogo" class="fa fa-user fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- NAME END(ARIS)-->

                  <!-- EMAIL(ARIS)-->
                  <div id="eml">
                    <h2>Cvsu Email</h2>
                      <input class="input-field" type = "email" id = "email" name = "instructor_email" placeholder = "Email" maxlength = "75" required>
                      <i id="emaillogo" class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END EMAIL(ARIS)-->
                  

                  <!-- INSTRUCTOR NUMBER(ARIS)-->
                  <div id="sn">
                    <h3>Instructor Number</h3>
                      <input class="input-field" type = "text" id = "studnum" name = "instructor_number" placeholder = "Instructor Number" maxlength = "12" required>
                      <i id="emaillogo" class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END INSTRUCTOR NUMBER(ARIS)-->

                  <!-- INSTRUCTOR PASSWORD(ARIS)-->
                  <div id="psw">
                    <h3>Password</h3>
                      <input class="input-field" type = "password" id = "password" name = "instructor_password_1" placeholder = "Password" pattern=".{8,}" required title="8 characters minimum, 75 characters maximum">
                      <i id="passlogo" class="fa fa-lock fa-lg" aria-hidden="true"></i>
                      <span toggle="#password-field" class="fa fa-fw fa-eye-slash fa-lg field_icon toggle-password"></span>
                  </div>
                  <!-- END INSTRUCTOR PASSWORD(ARIS)-->

                  <!-- INSTRUCTOR PASSWORD CONFIRMATION(ARIS)-->
                  <div id="cpsw">
                    <h3>Confirm Password</h3>
                    <input class="input-field" type = "password" id = "confirm_password" name = "instructor_password_2" placeholder = "Confirm Password" pattern=".{8,}" required title="8 characters minimum, 75 characters maximum">
                    <i id="confpasslogo" class="fa fa-lock fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- INSTRUCTOR PASSWORD CONFIRMATION(ARIS)-->
                </div><!-- LEFT END(ARIS)-->

                <div id="rgt"><!-- RIGHT START(ARIS)-->

                  <!-- INSTRUCTOR DEPARTMENT(ARIS)-->
                  <div id="cs">
                      <h2>Department</h2>
                        <select name="instructor_department" id="crs" required>
                            <option value="g1" disabled selected hidden>- - -</option>
                            <option name="instructor_department" value="DBPS">Department of Biological and Physical Sciences</option>
                            <option name="instructor_department" value="DCS">Department of Computer Studies</option>
                            <option name="instructor_department" value="DE">Department of Entrepreneurship</option>
                            <option name="instructor_department" value="DHM">Department of Hospitality Management</option>
                            <option name="instructor_department" value="DLMC">Department of Languages and Mass Communication</option>
                            <option name="instructor_department" value="DM">Department of Management</option>
                            <option name="instructor_department" value="DSSH">Department of Social Science and Humanities</option>
                            <option name="instructor_department" value="PED">Physical Education Department</option>
                            <option name="instructor_department" value="TED">Teachers Education Department</option>
                        </select>
                  </div>
                    <!-- END INSTRUCTOR DEPARTMENT(ARIS)-->

                  <br>

                  <!-- INSTRUCTOR GENDER(ARIS)-->
                  <div id="gndr">
                      <h3>Gender</h3>
                          <select name="instructor_gender" id="gnd" required>
                              <option value="g1" disabled selected hidden>- - -</option>
                              <option name="instructor_gender" value="Male">Male</option>
                              <option name="instructor_gender" value="Female">Female</option>
                              <option name="instructor_gender" value="Others">Others</option>
                          </select>
                  </div>
                  <!-- END INSTRUCTOR GENDER(ARIS)-->

                  <!-- INSTRUCTOR CONTACT NUMBER(ARIS)-->
                  <div id="cont">
                    <h2>Contact +639</h2>
                      <input class="input-field" type = "text" id = "cnt" name = "instructor_contact" placeholder = "Contact" pattern=".{6,}" maxlength = "11" required title="6 characters minimum, 75 characters maximum">
                      <i id="userlogo" class="fa fa-user fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END INSTRUCTOR CONTACT NUMBER(ARIS)-->
                </div>

                <input type = "submit" name="instructor_register" value = "SIGN UP" id="bt1">

                <a href="student-reg.php" style="text-decoration: none!important;"><input class="change" type = "button"
                value = "CHANGE ROLE"  onclick="return confirm('Are you sure you want to change role?');" id="bt2"></a>

                <p class="signup">Already have account?<a href="../login/login.php"> Sign in here!</a></p>
              </form> <!-- INSTRUCTOR FORM END(ARIS)-->
            </div> <!-- INSTRUCTOR FORM(ARIS)-->
          </div> <!-- BOX-ITEMS END(ARIS)-->
        </div> <!-- BOX DESIGN END(ARIS)-->
      </div> <!-- CONTAINER TRANSITION END(ARIS)-->
    </body>
</html>
