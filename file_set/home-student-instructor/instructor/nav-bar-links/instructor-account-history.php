<?php
session_start();
    include '../instructor-nav-bar.php';
    include '../../../database/database_connection.php';
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
