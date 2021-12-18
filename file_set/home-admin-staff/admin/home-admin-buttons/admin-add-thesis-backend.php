<?php
include '../../../database/database_connection.php';
include '../../reusable_function/functions.php';

if (isset($_POST["submit"])){
    $thesis_title = $_POST["thesis_title"];
    $thesis_owner = $_POST["thesis_owner"];
    $t_course = $_POST["t-course"];
    $t_file= $_POST["t_file"];
}
