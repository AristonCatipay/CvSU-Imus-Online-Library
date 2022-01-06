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
        <th style="width:25%">Name</th> <!--Revise design if you want to add Section-->
        <th style="width:25%">Book Title</th>
        <th style="width:20%">Date Requested</th>
        <th style="width:10%">Set Date</th>
        <th style="width:10%">Confirm</th>
      </tr>
      <?php 
        $query = "SELECT br.*, b.book_title
        FROM borrow_request_student br, book b, students s
        WHERE br.book_id=b.book_id AND br.student_number=s.student_number AND br.student_number=$student_number 
        AND (br.request_status='REQUEST' OR br.request_status='APPROVED' OR br.request_status='PENDING');";
        $result = mysqli_query($con,$query);
        while ($data = mysqli_fetch_array($result)){
          $book_title = $data["book_name"];    
          $suggestion_date  = $data["transcation_date"];
          $student_name = $data["student_name"];
          $comment = $data["comment"];  
      ?>
          <tr>
            <td><?php echo $student_name?></td>
            <td><?php echo $book_title?></td>
            <td><?php echo $transaction_date?></td>
            <td><?php echo $set_date?></td>
            <td><?php echo $confirm?></td>
          </tr> 
      <?php
        }
    ?>
    </table>
</body>
</html>
