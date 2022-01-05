<?php
session_start();
    include '../admin-nav-bar.php';
?>
<body>

  <div class="account-header">
    <h2>TRANSACTIONS / BORROWED BOOKS</h2>
  </div>

    <table id="trans">
      <tr>
        <th style="width:25%">Name/Course & Section</th>
        <th style="width:25%">Book Title</th>
        <th style="width:20%">Date Borrowed</th>
        <th style="width:20%">Return Schedule</th>
        <th style="width:10%">Returned</th>
      </tr>
    </table>

</body>
</html>
