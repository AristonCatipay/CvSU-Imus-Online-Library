<?php
session_start();
    include '../../../database/database_connection.php';    
    include '../../../custom_functions/functions.php';
    include '../home-student-backend.php';
    $user_data = check_if_student_login($con);
    
    if(isset($_POST["view_thesis"]))
    {
        // something is posted 
        $thesis_file_location = $_POST['thesis_file'];
        header("content-type:application/pdf");
        readfile($thesis_file_location);
    }
?>