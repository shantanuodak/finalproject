

<?php include 'header.php'; ?>

<?php

 session_start();

 if(key_exists( 'userID', $_SESSION)) {

    include 'user_authenticated_menu.php';

 } else {

     include 'login_form.php';

 }

 ?>


<?php include 'footer.php'; ?>
