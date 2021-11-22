<?php
session_start();
    include '../../staff/staff-nav-bar.php';
    include '../../staff/home-staff-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_staff_login($con); 
?>  