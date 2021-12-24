<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con); 
?>

<div class="container py-2">
            <div class="row mt-2">
                <?php
                    $query = "SELECT * FROM thesis";
                    $run_query = mysqli_query($con,$query);
                    while ($thesis_data = mysqli_fetch_array($run_query)){
                        $thesis_title = $thesis_data['thesis_title'];
                        $thesis_file = $thesis_data['thesis_file'];
                        $author = $thesis_data['authors'];
                        $date_published = $thesis_data['date_published'];
                        $thesis_rate = $thesis_data['thesis_rate'];
                        ?>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo $thesis_file?>" alt="Card image cap" width="400px" height="400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Book Title:<?php echo $thesis_title?></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                                    </div>
                                <ul class="list-group list-group-flush" style="list-style:none">
                                    <li class="list-group-item">Author: <?php echo $author  ?></li>
                                    <li class="list-group-item">Date Published: <?php echo $date_published  ?></li>
                                    <li class="list-group-item">Rate: <?php echo $thesis_rate  ?></li>
                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-borrow">Borrow</button>
                                    <button class="btn btn-borrow">Rate</button>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                ?>   
            </div> 
        </div>
    </body>
</html> 


