<?php
session_start();
    include '../../instructor/instructor-nav-bar.php';
    include '../../instructor/home-instructor-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_instructor_login($con); 
?>