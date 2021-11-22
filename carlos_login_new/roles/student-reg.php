<?php
?>
<!Doctype html>
  <html class="animated fadeIn">

    <head>
        <title>Sign Up | CVSU Imus - Online Library</title>
          <link rel = "stylesheet" href = "../css/student-reg.css">
          <link rel="stylesheet" href="../css/animate.css">
          <link rel="shortcut icon" type="image/png" href="css/pics/favicon.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
      <div class="container-transition">  <!-- CONTAINER TRANSITION START(ARIS)-->
        <!-- <form class = "box" action = "../login.html" method = "post"> (ARIS)-->
        <div class = "box"><!-- BOX DESIGN START(ARIS)-->
          <div class="box-items">  <!-- BOX-ITEMS START(ARIS)-->
            <img class="logo" src="../css/pics/cvsulogo.png">
              <div class="logotitle">
                <h2 style="font-size: 60px; text-align: left; margin-left: 20px; font-family: 'Archivo', sans-serif; font-weight: 700">Online Library</h2>
                <p style="font-size: 18px; text-align: left; margin-left: 30px; line-height: 0; letter-spacing: 4px; font-family: 'Archivo', sans-serif; font-weight: 300">Cavite State University - Imus</p>
              </div>

              <div id="rol">
                <h5>Create Account Student</h5>
              </div>
         
          

            <div id="student" class="inv">
              <form method="post" action="student-reg-backend.php">  <!-- STUDENT FORM(ARIS)-->
                <div id="lft"> <!-- LEFT START(ARIS)-->

                  <!-- NAME(ARIS)-->
                  <div id="nm">
                    <h2>Name(S-F-M)</h2>
                      <input class="input-field" type = "text" id = "name" name = "student_name" placeholder="Name" pattern=".{6,}" maxlength = "75" required title="6 characters minimum, 75 characters maximum">
                      <i id="userlogo" class="fa fa-user fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END NAME(ARIS)-->

                  <!-- EMAIL(ARIS)-->
                  <div id="eml">
                    <h2>Cvsu Email</h2>
                      <input class="input-field" type = "email" id = "email" name = "student_email" placeholder = "Email" maxlength = "75" required>
                      <i id="emaillogo" class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END EMAIL(ARIS)-->

                  <!-- STUDENT NUMBER(ARIS)-->
                  <div id="sn">
                    <h3>Student Number</h3>
                      <input class="input-field" type = "text" id = "studnum" name = "student_number" placeholder = "Student Number" maxlength = "20" required>
                      <i id="emaillogo" class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END STUDENT NUMBER(ARIS)-->

                  <!-- STUDENT PASSWORD(ARIS)-->
                  <div id="psw">
                    <h3>Password</h3>
                    <input class="input-field" type = "password" id = "password" name = "student_password_1" placeholder = "Password" pattern=".{8,}" required title="8 characters minimum, 75 characters maximum">
                    <i id="passlogo" class="fa fa-lock fa-lg" aria-hidden="true"></i>
                    <span toggle="#password-field" class="fa fa-fw fa-eye-slash fa-lg field_icon toggle-password"></span>
                  </div>
                  <!-- END STUDENT PASSWORD(ARIS)-->

                  <!-- STUDENT PASSWORD CONFIRMATION(ARIS)-->
                  <div id="cpsw">
                    <h3>Confirm Password</h3>
                      <input class="input-field" type = "password" id = "confirm_password" name = "student_password_2" placeholder = "Confirm Password" pattern=".{8,}" required title="8 characters minimum, 75 characters maximum">
                      <i id="confpasslogo" class="fa fa-lock fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END STUDENT PASSWORD CONFIRMATION(ARIS)-->

                </div> <!-- LEFT END(ARIS)-->

                <div id="rgt"> <!-- RIGHT START(ARIS)-->

                    <!-- STUDENT COURSE(ARIS)-->
                    <div id="cs">
                      <h2>Course</h2>
                        <select name="student_course" id="crs" required>
                            <option value="g1" disabled selected hidden>- - -</option>
                            <option name="student_course" value="BSCS">Bachelor of Science in Computer Science</option>
                            <option name="student_course" value="BSBM">Bachelor of Science in Business Management</option>
                            <option name="student_course" value="BSE">Bachelor of Science in Entrepreneurship</option>
                            <option name="student_course" value="BSIT">Bachelor of Science in Information Technology</option>
                            <option name="student_course" value="BSHRM">Bachelor of Science in Hotel and Restaurant Management</option>
                            <option name="student_course" value="BSOA">Bachelor of Science in Office Administration</option>
                            <option name="student_course" value="BSSE">Bachelor of Science in Secondary Education</option>
                        </select>
                    </div>
                    <!-- END STUDENT COURSE(ARIS)-->
                    <br>
                    <!-- STUDENT GENDER(ARIS)-->
                    <div id="gndr">
                      <h3>Gender</h3>
                          <select name="student_gender" id="gnd" required>
                              <option value="g1" disabled selected hidden>- - -</option>
                              <option name="student_gender" value="Male">Male</option>
                              <option name="student_gender" value="Female">Female</option>
                              <option name="student_gender" value="Others">Others</option>
                          </select>
                    </div>
                    <!-- END STUDENT GENDER(ARIS)-->

                    <!-- STUDENT CONTACT NUMBER(ARIS)-->
                    <div id="cont">
                      <h2>Contact +639</h2>
                      <input class="input-field" type = "text" id = "cnt" name = "student_contact" placeholder = "Contact" pattern=".{6,}" maxlength = "11" required title="6 characters minimum, 11 characters maximum">
                      <i id="userlogo" class="fa fa-user fa-lg" aria-hidden="true"></i>
                    </div>
                    <!-- END STUDENT CONTACT NUMBER(ARIS)-->

                </div><!-- END RIGHT(ARIS)-->

                  <input type="submit" name="student_register" value ="SIGN UP" id="bt1">

                  <a href="instructor-reg.php" style="text-decoration: none!important;"><input class="change" type = "button"
                  value = "CHANGE ROLE"  onclick="return confirm('Are you sure you want to change role?');" id="bt2"></a>

                  <p class="signup">Already have account?<a href="../login/login.php"> Sign in here!</a></p>
              </form> <!-- STUDENT FORM END(ARIS)-->
            </div> <!-- STUDENT FORM(ARIS)-->
          </div> <!-- BOX-ITEMS END(ARIS)-->
        </div> <!-- BOX DESIGN END(ARIS)-->
      </div> <!-- CONTAINER TRANSITION END(ARIS)-->
    </body>

    <script>
       // document.getElementById('rl').addEventListener('change', function () {
       //         'use strict';
       //         var vis = document.querySelector('.vis'),
       //             target = document.getElementById(this.value);
       //         if (vis !== null) {
       //             vis.className = 'inv';
       //         }
       //         if (target !== null ) {
       //             target.className = 'vis';
       //         }
       // });

      //     $(document).ready(function () {
      //         $('.inv').hide();
      //         $('#student').show();
      //     $('#rl').change(function () {
      //         $('.inv').hide();
      //         $('#'+$(this).val()).show();
      //   })
      // });
    </script>
</html>
