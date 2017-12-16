

<?php include 'header.php' ?>


<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>


<?php
 session_start();

 if(key_exists( 'userID', $_SESSION)) {

     echo '<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>';
     echo '<h1><a href="index.php?page=accounts&action=logout">Logout</a></h1>';
     echo '<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>';

 } else {

     include 'login_form.php';

 }
 ?>


<?php include 'footer.php' ?>
