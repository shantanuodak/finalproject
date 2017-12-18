<?php include "header.php";?>
<?php include "navbar.php";?>

<html>

<body>

<h1><center>ALL ACCOUNTS</h1></center><br>

<style>

    .text

    {
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: "Adobe Ming Std";
    }

</style>


<body>

<div>
    <img class = image src="http://www.salttechno.com/wp-content/uploads/2015/08/web-designer-pune-background.jpg" width="100%" height="950px">

</div>

</body>



<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>


<script src="js/scripts.js"></script>
</body>
</html>