<?php
  include '../../login/login-backend.php';
  include '../../database/database_connection.php';
  include 'home-staff-backend.php';
  include 'staff-nav-bar.php';
  $user_data = check_if_staff_login($con) 
?>
      <div class="welcome-title">

        <div class="wt-text">
          <p id="wt1">Welcome to</p>
          <p id="wt2">CvSU - IMUS CAMPUS</p>
          <p id="wt3"> ONLINE LIBRARY </p>
          <?php
            $user_name = $user_data['staff_name'];
            echo $user_name;  
          ?>
        </div>

        <div class="wt-btns">
          <a href="#"><button id="bt1">Add Books</button></a>
          <a href="#"><button id="bt2">Add Thesis</button></a>
        </div>
      </div>
  </body>
</html>