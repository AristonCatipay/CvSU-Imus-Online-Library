<!Doctype html>
  <html class="animated fadeIn">
    <head>
      <title>Home Staff | CVSU Imus - Online Library</title>
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/reset.css">
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/home-admin-staff.css"> 
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/books.css">
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/animate.css">
    <link rel="shortcut icon" type="image/png" href="/../cvsu-imus-online-library/file_set/css/pics/favicon.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>


    <body>
    <div class="logo-navbar">
    <nav>
      <a href ="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/home-staff.php"><img class="logo" src="/../cvsu-imus-online-library/file_set/css/pics/logo-text.png"></a>
      <div class="nav-bar">
          <button class="hm"><a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/home-staff.php">Home</a></button>
            <div class="dropdown">
                <button class="dropbtn">Library</button>
                    <div class="dropdown-content">
                        <a href="#" id="dbooks">Books</a>
                        <a href="#" id="dthesis">Thesis</a>
                    </div>
            </div>
                <button class="crt"><a href="#">Records</a></button>
            <div class="dropdown">
                <button class="dropbtn"><a href="#">Transac</a></button>
                    <div class="dropdown-content">
                        <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/book-request.php">Book Request</a>
                        <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/borrowed-books.php">Borrowed Books</a>
                        <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/returned-books.php">Returned Books</a>
                    </div>
            </div>
                <button class="acn"><a href="#">Account</a></button>
                <button class="cct"><a href="#">?</a></button>
                <button class="lo"><a href="/../cvsu-imus-online-library/file_set/login/logout-backend.php">X</a></button>
        </div>
        <br>
    </nav>
    </div>  
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>

            $(window).scroll(function(){
                if($(window).scrollTop()){
                    $("nav").addClass("black");
                }
                else{
                    $("nav").removeClass("black");
                }
            });
    </script>