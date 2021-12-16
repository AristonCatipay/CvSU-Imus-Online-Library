<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con);
?>
<body>

  <div class="account-header">
    <h2>ACCOUNT / SUGGESTION</h2>
  </div>


<!-- FORM -->
    <div class="suggestion-container">

      <div class="textarea">
        <textarea id="word" oninput="countWord()"></textarea>
      </div>

          <div class="word-submit">
            <button class="suggestion-submit">Submit</button>
            <p>Word Count: <span id="show">0 </span> / 100</p>
          </div>

    </div>

    <!-- FORM END -->


    <script>
        function countWord() {

            var words = document
                .getElementById("word").value;

            var count = 0;


            var split = words.split(' ');

            for (var i = 0; i < split.length; i++) {
                if (split[i] != "") {
                    count += 1;
                }
            }

            document.getElementById("show")
                .innerHTML = count;
        }
    </script>
</body>

</html>
