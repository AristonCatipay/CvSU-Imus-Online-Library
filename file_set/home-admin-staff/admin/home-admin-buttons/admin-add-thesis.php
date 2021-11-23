<?php
session_start();
    include '../../admin/admin-nav-bar.php';
    include '../../admin/home-admin-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_admin_login($con);
?>   
        <form action="admin-add-thesis-backend.php" 
        method="post" enctype="multipart/form-data">
            <div class="">
                <h2>THESIS TITLE</h2>
                <input class="input-field" type="text" name="thesis_title">
            </div>
            <div class="">
                <h2>OWNER/S</h2>
                <input class="input-field" type="text" name="owners">
            </div>
            <div class="">
                <h2>DESIGNATED COURSE</h2>
                <select name="course_id" id="crs" required>
                        <option value="g1" disabled selected hidden>- - -</option>
                        <option name="course_id" value="1">Bachelor of Arts in Journalism</option>
                        <option name="course_id" value="2">Bachelor of Early Childhood Education</option>
                        <option name="course_id" value="3">Bachelor of Elementary Education</option>
                        <option name="course_id" value="4">Bachelor of Science in Business Management</option>
                        <option name="course_id" value="5">Bachelor of Science in Computer Science</option>
                        <option name="course_id" value="6">Bachelor of Science in Entrepreneurship</option>
                        <option name="course_id" value="7">Bachelor of Science in Hospitality Management</option>
                        <option name="course_id" value="8">Bachelor of Science in Information Technology</option>
                        <option name="course_id" value="9">Bachelor of Science in Office Administration</option>
                        <option name="course_id" value="10">Bachelor of Science in Psychology</option>
                        <option name="course_id" value="11">Bachelor of Secondary Education</option>
                        <option name="course_id" value="12">Teacher Certificate Program</option>
                        <option name="course_id" value="13">Master in Professional Studies</option>
                        <option name="course_id" value="14">Master of Arts in Education</option>
                        <option name="course_id" value="15">Master of Business Administration</option>
                </select>
            </div>
            <button type="submit" name="submit">ADD</button>
        </form>
    </body>
</html>