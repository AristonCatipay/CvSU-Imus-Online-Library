<?php
session_start();
    include '../instructor-nav-bar.php';
    include '../home-instructor-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_instructor_login($con);
    $instructor_name = $user_data["instructor_name"];
    $instructor_number = $user_data["instructor_number"];
    $instructor_department = $user_data["instructor_department"];
    $instructor_email = $user_data["instructor_email"];
    $instructor_contact = $user_data["instructor_contact"];
    $instructor_password = $user_data["instructor_password"];
    
?>
<body>
    <div class="account-header">
      <h2>ACCOUNT / PROFILE</h2>
    </div>

    <div class="profile-container">
      <div class="profile-header">Account Details</div>

      <div class="left">
        <div class="details-label"><label>Full Name:</label></div>
        <div class="details-label"><label>Instructor Number:</label></div>
        <div class="details-label"><label>Department:</label></div>
        <div class="details-label"><label>CVSU Email:</label></div>
        <div class="details-label"><label>Contact Number:</label></div>
      </div>

      <div class="right">
        <div class="details"><p style="font-size: 15px; margin-left:10px;"><?php echo $instructor_name?></p></div>
        <div class="details"><p style="font-size: 15px; margin-left:10px;"><?php echo $instructor_number ?></p></div>
        <div class="details"><p style="font-size: 15px; margin-left:10px;"><?php echo $instructor_department?></p></div>
        <div class="details"><p style="font-size: 13px; margin-left:10px;"><?php echo $instructor_email?></p></div>
        <div class="details"><p style="font-size: 15px; margin-left:10px;">+639<?php echo $instructor_contact?></p></div>
        <div class="pass-change"><a href="#" id="change-pass">Change Password?</a></div>
      </div>
    </div>

    <div class="change-modal" id="modal-change">
        <div class="change-container">
          <span class="close">&times;</span>
          <div class="change-header">Change Password</div>


          <div class="change-left">
            <div class="change-details-label"><label>Current Password:</label></div>
            <div class="change-details-label"><label>New Password:</label></div>
            <div class="change-details-label"><label>Confirm New Password:</label></div>
          </div>

          <div class="change-right">
            <form action="instructor-account-profile.php" method="post">
              <input type=password class="change-details" name="current_password"></input>
              <input type=password class="change-details" name="new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,31}" required title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter"></input>
              <input type=password class="change-details" name="confirm_new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,31}" required title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter"></input>
          </div>
              <button class="save-change" id="change-save" name="change_password">Save</button>
            </form>
        </div>
    </div>
</body>
</html>

<script>
    var modalchange = document.getElementById("modal-change");
    var change = document.getElementById("change-pass");
    var closechange = document.getElementsByClassName("close")[0];

    change.onclick = function() {
      modalchange.style.display = "block";
    }

    closechange.onclick = function() {
      modalchange.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modalchange) {
        modalchange.style.display = "none";
      }
    }
</script>

<?php
// Change Password

  if(isset($_POST["change_password"])){
    $current_password = md5($_POST["current_password"]);
    $new_password = md5($_POST["new_password"]);
    $confirm_new_password = md5($_POST["confirm_new_password"]);

    if(isset($current_password) && isset($new_password) && isset($confirm_new_password)){
      if($current_password === $instructor_password){
        if ($new_password === $confirm_new_password){
          $query =  "UPDATE instructors SET instructor_password='$new_password' WHERE instructor_number=$instructor_number";
          mysqli_query($con,$query);
          echo '<script type="text/javascript">alert("SUCCESSFUL!"); 
            location="/../cvsu-imus-online-library/file_set/login/logout-backend.php"; </script>';
        }else{
          echo '<script type="text/javascript">alert("NEW PASSWORD DOESNT MATCH!"); 
            location="instructor-account-profile.php"; </script>';
        }
      }else{
        echo '<script type="text/javascript">alert("WRONG OLD PASSWORD!"); 
            location="instructor-account-profile.php"; </script>';
      }
    }
    else{
      echo '<script type="text/javascript">alert("DATA INCOMPLETE!"); 
            location="instructor-account-profile.php"; </script>';
    }
  }
