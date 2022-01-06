<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con);
?>
<body>

  <div class="account-header">
    <h2>ACCOUNT / HISTORY</h2>
  </div>

    <table id="s-history">
      <tr>
        <th style="width:32%">Book Title</th>
        <th style="width:20%">Date Borrowed</th>
        <th style="width:20%">Return Schedule</th>
        <th style="width:20%">Date Returned</th>
        <th style="width:8%">Penalty</th>
      </tr>
    </table>

</body>
</html>
