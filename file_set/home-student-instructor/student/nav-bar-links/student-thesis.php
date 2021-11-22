<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con); 
?>