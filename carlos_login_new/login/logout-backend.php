<?php
session_start();

    if(isset($_SESSION['student_number']))
    {
        unset($_SESSION['student_number']);
    }
    if(isset($_SESSION['instructor_number']))
    {
        unset($_SESSION['instructor_number']);
    }
    if(isset($_SESSION['staff_number']))
    {
        unset($_SESSION['staff_number']);
    }
    if(isset($_SESSION['admin_number']))
    {
        unset($_SESSION['admin_number']);
    }
header('Location: /../carlos_login_new/login/login.php');
die();
?>
