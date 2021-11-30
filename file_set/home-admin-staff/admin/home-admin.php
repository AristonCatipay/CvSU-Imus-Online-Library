<?php
  include '../../login/login-backend.php';
  include '../../database/database_connection.php';
  include 'home-admin-backend.php';
  include 'admin-nav-bar.php';
  $user_data = check_if_admin_login($con);
?>
<body>
  <!-- MAIN UI -->
      <div class="welcome-title">

        <div class="wt-text">
          <p id="wt1">Welcome to</p>
          <p id="wt2">CvSU - IMUS CAMPUS</p>
          <p id="wt3"> ONLINE LIBRARY </p>
        </div>

        <div class="wt-btns">
          <a href="#"><button id="bt1">Add Books</button></a>
          <a href="#"><button id="bt2">Add Thesis</button></a>
        </div>
      </div>
  <!-- MAIN UI END -->

  <!-- ADD BOOKS CONTAINER -->

  <form action="home-admin-buttons/admin-add-book-backend.php" method="post">
          <div class="add-books" id="add-b">
            <div class="a-b-container">
              <span class="close">&times;</span><p class="btn-header">Add Book:</p>
                <div class="a-b-items">

                    <div class="a-b-inputs" id="b-title">
                      <label>Book Title: </label>
                      <input class="inp" type = "text" id = "book-title" name = "book_title" style="font-size:18px;">
                    </div>

                    <div class="a-b-inputs" id="b-wrapper1">
                        <label>Author: </label>
                        <input class="inp" type = "text" id = "book-author" name = "author" style="font-size:18px;">

                        <label>ISBN: </label>
                        <input class="inp" type = "text" id = "book-isbn" name = "ISBN_number" style="font-size:18px;">
                    </div>

                  <div class="a-b-inputs" id="b-wrapper2">
                      <label>Designated Department: </label>
                        <select class="inp" name="department_id" id="department_id" required style="font-size:18px;">
                            <option value="g1" disabled selected hidden>- - -</option>
                            <option name="department_id" value="BSCS">Bachelor of Science in Computer Science</option>
                            <option name="department_id" value="BSBM">Bachelor of Science in Business Management</option>
                            <option name="department_id" value="BSE">Bachelor of Science in Entrepreneurship</option>
                            <option name="department_id" value="BSIT">Bachelor of Science in Information Technology</option>
                            <option name="department_id" value="BSHRM">Bachelor of Science in Hotel and Restaurant Management</option>
                            <option name="department_id" value="BSOA">Bachelor of Science in Office Administration</option>
                            <option name="department_id" value="BSSE">Bachelor of Science in Secondary Education</option>
                        </select>

                      <label>No. of Books: </label>
                      <input class="inp" type = "text" id = "book-stocks" name = "number_of_stocks" style="font-size:18px;">
                  </div>

                  <div class="a-b-inputs" id="b-img">

                    <label for="b-add-img1" class="custom-file-upload">
                        <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i><br>Add Image
                    </label>
                    <input id="b-add-img1" type="file" name="title_photo_location">

                    <label for="b-add-img2" class="custom-file-upload">
                        <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i><br>Add Image
                    </label>
                    <input id="b-add-img2" type="file" name="overview_photo_location">

                    <label for="b-add-img3" class="custom-file-upload">
                        <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i><br>Add Image
                    </label>
                    <input id="b-add-img3" type="file" name="table_of_contents_location">
                  </div>

                  <input type="submit" name="" value ="Add Book" id="b-submit">

                  </div>
              </div>
          </div>
  </form>

  <!-- ADD BOOKS CONTAINER END -->

  <!-- ADD THESIS CONTAINER -->

  <form action="#" method="post">
            <div class="add-thesis" id="add-t">
              <div class="a-t-container">
                <span class="close2">&times;</span><p class="btn-header">Add Thesis:</p>
                  <div class="a-t-items">

                      <div class="a-t-inputs" id="t-title">
                        <label>Thesis Title: </label>
                        <input class="inp" type = "text" id = "thesis-title" name = "ThesisTitle" style="font-size:18px;">
                      </div>

                      <div class="a-t-inputs" id="t-wrapper1">
                          <label>Owner/s: </label>
                          <input class="inp" type = "text" id = "thesis-owner" name = "ThesisOwner" style="font-size:18px;">
                      </div>

                    <div class="a-t-inputs" id="t-wrapper2">
                        <label>Designated Course: </label>
                            <select class="inp" name="t-course" id="t-course" required style="font-size:18px;">
                              <option value="g1" disabled selected hidden>- - -</option>
                              <option name="t-course" value="DBPS">Department of Biological and Physical Sciences</option>
                              <option name="t-course" value="DCS">Department of Computer Studies</option>
                              <option name="t-course" value="DE">Department of Entrepreneurship</option>
                              <option name="t-course" value="DHM">Department of Hospitality Management</option>
                              <option name="t-course" value="DLMC">Department of Languages and Mass Communication</option>
                              <option name="t-course" value="DM">Department of Management</option>
                              <option name="t-course" value="DSSH">Department of Social Science and Humanities</option>
                              <option name="t-course" value="PED">Physical Education Department</option>
                              <option name="t-course" value="TED">Teachers Education Department</option>
                          </select>
                    </div>

                    <div class="a-t-inputs" id="t-img">

                      <label for="t-add-img1" class="custom-file-upload2">
                          <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i><br>Add Image
                      </label>
                      <input id="t-add-img1" type="file">
                    </div>

                    <input type="submit" name="" value ="Add Thesis" id="t-submit">

                    </div>
                </div>
            </div>
  </form>

  <!-- ADD THESIS CONTAINER END -->
  </body>

  <!-- JAVA SCRIPT FOR ADDING CONTAINERS -->
      <script>
          var modal1 = document.getElementById("add-b");
          var modal2 = document.getElementById("add-t");
          var btn1 = document.getElementById("bt1");
          var btn2 = document.getElementById("bt2");
          var span1 = document.getElementsByClassName("close")[0];
          var span2 = document.getElementsByClassName("close2")[0];

          // books
          btn1.onclick = function() {
            modal1.style.display = "block";
          }

          span1.onclick = function() {
            modal1.style.display = "none";
          }

          window.onclick = function(event) {
            if (event.target == modal1) {
              modal1.style.display = "none";
            }
          }

          // thesis
          btn2.onclick = function() {
            modal2.style.display = "block";
          }

          span2.onclick = function() {
            modal2.style.display = "none";
          }

          window.onclick = function(event) {
            if (event.target == modal2) {
              modal2.style.display = "none";
            }
          }

      </script>
  </html>
