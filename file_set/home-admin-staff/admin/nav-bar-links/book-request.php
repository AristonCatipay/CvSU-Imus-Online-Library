<?php
session_start();
    include '../admin-nav-bar.php';
?>
<body>

  <div class="account-header">
    <h2>TRANSACTIONS / BOOK REQUESTS</h2>
  </div>

    <table id="trans">
      <tr>
        <th style="width:25%">Name/Course & Section</th>
        <th style="width:25%">Book Title</th>
        <th style="width:20%">Date Requested</th>
        <th style="width:10%">Set Date</th>
        <th style="width:10%">Set Time</th>
        <th style="width:10%">Confirm</th>
      </tr>
    </table>

</body>
</html>
