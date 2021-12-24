<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con);
    $student_name = $user_data["student_name"];
    $student_number = $user_data["student_number"];
    $student_course = $user_data["student_course"];
    $student_email = $user_data["student_email"];
    $student_contact = $user_data["student_contact"];
    $student_password = $user_data["student_password"];
?>
<body>
    <div class="account-header">
      <h2>ACCOUNT / PROFILE</h2>
    </div>

    <div class="profile-container">
      <div class="profile-header">Account Details</div>

      <div class="left">
        <div class="details-label"><label>Full Name:</label></div>
        <div class="details-label"><label>Student Number:</label></div>
        <div class="details-label"><label>Course:</label></div>
        <div class="details-label"><label>CVSU Email:</label></div>
        <div class="details-label"><label>Contact Number:</label></div>
      </div>

      <div class="right">
        <div class="details"><p><?php echo $student_name?></p></div>
        <div class="details"><p><?php echo $student_number?></p></div>
        <div class="details"><p><?php echo $student_course?></p></div>
        <div class="details"><p><?php echo $student_email?></p></div>
        <div class="details"><p><?php echo $student_contact?></p></div>
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
            <input type=password class="change-details"></input>
            <input type=password class="change-details"></input>
            <input type=password class="change-details"></input>
          </div>
          <button class="save-change" id="change-save">Save</a></button>
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