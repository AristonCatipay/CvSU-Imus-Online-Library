<?php
session_start();
    include '../../../database/database_connection.php';    
    include '../../../custom_functions/functions.php';
    include '../home-student-backend.php';
    $user_data = check_if_student_login($con);
    
    if(isset($_POST["borrow_book"]))
    {
        // something is posted 
        $book_id = $_POST['book_id'];
        $student_id = $_POST['student_id'];
        $request_status = "REQUEST";

        $data_duplication_checker = mysqli_query($con,"SELECT * FROM borrow_request_student WHERE student_number='$student_id'");
        if(isset($book_id) && isset($student_id)&&(mysqli_num_rows($data_duplication_checker) > 2)){
            // Saving data to database  
            $query = "insert into borrow_request_student(book_id,student_number,request_status) 
            values ('$book_id','$student_id','$request_status')";
            mysqli_query($con,$query);
            header("Location: student-cart.php");
            die;
            mysqli_close($con);
        } else {
            echo '<script type="text/javascript">alert("Request cannot be processed!\nPlease check if you have a pending Return Book\nor you already Borrowed 2 Books "); 
            location="student-books.php"; </script>';
        }
    }
?>