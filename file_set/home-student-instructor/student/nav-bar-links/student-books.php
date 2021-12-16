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
                    $query = "SELECT * FROM book";
                    $run_query = mysqli_query($con,$query);
                    while ($book_data = mysqli_fetch_array($run_query)){
                        $book_title = $book_data['book_title'];
                        $title_photo_location = $book_data['title_photo_location'];
                        $ISBN_number = $book_data['ISBN_number'];
                        $author = $book_data['author'];
                        $date_published = $book_data['date_published'];
                        $number_of_stocks = $book_data['number_of_stocks'];
                        $book_rate = $book_data['book_rate'];
                        ?>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="<?php echo $title_photo_location ?>" alt="Card image cap" width="400px" height="400px">
                                    <div class="card-body">
                                        <h5 class="card-title">Book Title:<?php echo $book_title ?></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                                    </div>
                                <ul class="list-group list-group-flush" style="list-style:none">
                                    <li class="list-group-item">ISBN Number: <?php echo $ISBN_number ?></li>
                                    <li class="list-group-item">Author: <?php echo $author  ?></li>
                                    <li class="list-group-item">Date Published: <?php echo $date_published  ?></li>
                                    <li class="list-group-item">Stocks: <?php echo $number_of_stocks  ?></li>
                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-borrow">Borrow</button>
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


