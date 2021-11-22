<?php
session_start();
    //include '../../admin/admin-nav-bar.php';
    include '../../admin/home-admin-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_admin_login($con);
?>  
        <form action="admin-add-book-backend.php" 
        method="post" enctype="multipart/form-data">
            <div class="">
                <h2>DEPARTMENT</h2>
                <select name="department_id" id="crs" required>
                        <option value="g1" disabled selected hidden>- - -</option>
                        <option name="department_id" value="1">Department of Biological and Physical Sciences</option>
                        <option name="department_id" value="2">Department of Computer Studies</option>
                        <option name="department_id" value="3">Department of Entrepreneurship</option>
                        <option name="department_id" value="4">Department of Hospitality Management</option>
                        <option name="department_id" value="5">Department of Languages and Mass Communication</option>
                        <option name="department_id" value="6">Department of Management</option>
                        <option name="department_id" value="7">Department of Social Science and Humanities</option>
                        <option name="department_id" value="8">Physical Education Department</option>
                        <option name="department_id" value="9">Teachers Education Department</option>
                </select>
            </div>
            <div class="">
                <h2>BOOK TITLE</h2>
                <input class="input-field" type="text" name="book_title">
            </div>
            <div class="">
                <h2>FRONT PAGE PHOTO</h2>
                <input class="input-field" type="file" name="title_photo_location">
            </div>
            <div class="">
                <h2>OVERVIEW PAGE PHOTO</h2>
                <input class="input-field" type="file" name="overview_photo_location">
            </div>
            <div class="">
                <h2>TABLE OF CONTENTS PAGE PHOTO</h2>
                <input class="input-field" type="file" name="table_of_contents_location">
            </div>
            <div class="">
                <h2>ISBN NUMBER</h2>
                <input class="input-field" type="text" name="ISBN_number">
            </div>
            <div class="">
                <h2>AUTHOR</h2>
                <input class="input-field" type="text" name="author">
            </div>
            <div class="">
                <h2>DATE</h2>
                <input class="input-field" type="date" name="date_published">
            </div>
            <div class="">
                <h2>STOCKS</h2>
                <input class="input-field" type="text" name="number_of_stocks">
            </div>
            <button type="submit" name="submit">UPLOAD</button>
        </form>
    </body>
</html>
