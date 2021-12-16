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
      <tr>
        <td>Myth</td>
        <td>Amelia Watson</td>
        <td>Detective</td>
        <td>Salty</td>
        <td>13/10</td>
      </tr>
      <tr>
        <td>HoloX</td>
        <td>Sakamata Chloe</td>
        <td>Intern</td>
        <td>Orca</td>
        <td>10/10</td>
      </tr>
    </table>

</body>
</html>
