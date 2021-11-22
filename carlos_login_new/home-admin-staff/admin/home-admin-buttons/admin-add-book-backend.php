<?php
include '../../../database/database_connection.php';

if (isset($_POST["submit"])){
    $department_id = $_POST["department_id"];
    $book_title = $_POST["book_title"];
    $title_photo_location = $_FILES["title_photo_location"];
    $overview_photo_location = $_FILES["overview_photo_location"];
    $table_of_contents_location = $_FILES["table_of_contents_location"];
    $ISBN_number = $_POST["ISBN_number"];
    $author = $_POST["author"];
    $date_published = $_POST["date_published"];
    $number_of_stocks = $_POST["number_of_stocks"];

    $titlePhotoName = extract_name($title_photo_location);
    $overviewPhotoName = extract_name($overview_photo_location);
    $tableOfContentsPhotoName = extract_name($table_of_contents_location);

    $titlePhotoTmpName = extract_tmp_name($title_photo_location);
    $overviewPhotoTmpName = extract_tmp_name($overview_photo_location);
    $tableOfContentsTmpName = extract_tmp_name($table_of_contents_location);

    $titlePhotoExt = extract_ext($titlePhotoName);
    $overviewPhotoExt = extract_ext($overviewPhotoName);
    $tableOfContentsPhotoExt = extract_ext($tableOfContentsPhotoName);

    $titlePhotoSize = extract_size($title_photo_location);
    $overviewPhotoSize = extract_size($overview_photo_location);
    $tableOfContentsPhotoSize = extract_size($table_of_contents_location);

    $titlePhotoError = extract_error($title_photo_location);
    $overviewPhotoError = extract_error($overview_photo_location);
    $tableOfContentsPhotoError = extract_error($table_of_contents_location);

    if ($department_id === '1'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DBPS/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    if ($department_id === '2'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DCS/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    if ($department_id === '3'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DE/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    if ($department_id === '4'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DHM/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    if ($department_id === '5'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DLMC/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    if ($department_id === '6'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DM/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    if ($department_id === '7'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DSSH/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    if ($department_id === '8'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/PED/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    if ($department_id === '9'){

        if (check_file_extension($titlePhotoExt) && check_file_extension($overviewPhotoExt) && check_file_extension($tableOfContentsPhotoExt)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/TED/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    header('Location: admin-add-book.php?uploadsuccessful');
                } else {
                    echo "File/s too Big!";
                }
            } else {
                echo "Error/s! Failed!";
            }
        } else {
            echo "Incorrect File/s Extension!";
        }
    }
    else {
        echo "Failed!";
    }
}
// Functions for SQL 

function sql_query ($con, $departmentId, $bookTitle, $titlePhotoLocation, $overviewPhotoLocation,
    $tableOfContentsLocation, $ISBNNumber, $author, $datePublished, $numberOfStocks){

    $book_rate = 0;

    $query = "INSERT INTO book 
    (department_id, book_title, title_photo_location, overview_photo_location, 
    table_of_contents_location, ISBN_number, author, date_published, number_of_stocks, book_rate)
    VALUES
    ('$departmentId', '$bookTitle', '$titlePhotoLocation', '$overviewPhotoLocation', 
    '$tableOfContentsLocation', '$ISBNNumber', '$author', '$datePublished', '$numberOfStocks', '$book_rate')";

    $queryResult = mysqli_query($con,$query);
    return $queryResult;
}

// Extraction of different data in a file

function extract_name($fileName){
    $name = $fileName['name'];
    return $name;
}

function extract_tmp_name($fileName){
    $tmpName = $fileName['tmp_name'];
    return $tmpName; 
}

function extract_size($fileName){
    $size =  $fileName['size'];
    return $size;
}

function extract_error($fileName){
    $error = $fileName['error'];
    return $error;
}

function extract_ext($fileName){
    $partialExt = explode(".", $fileName);
    $extension = strtolower(end($partialExt));
    return $extension;
}

// End of Extraction function

function file_destination($directory ,$renamedFile){
    $fileUploadDestination = $directory.$renamedFile;
    return $fileUploadDestination;
}

function check_file_extension($fileActualExtention) {
    $allowedExtension = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtention, $allowedExtension)){
        return true;
    } else {
        return false;
    }
}
function check_upload_error($fileError){
    if ($fileError === 0){
        return true;
    } else {
        return false;
    }
}

function check_file_size($fileSize){
    if ($fileSize < 1000000){
        return true;
    } else {
        return false;
    }
}

function rename_file($extractedExt){
    $renamedFile = uniqid('', true).".".$extractedExt;
    return $renamedFile;
}

?>