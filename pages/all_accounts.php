<?php include "header.php";?>
<?php include "navbar.php";?>

<html>

<body>

<h1><center>ALL ACCOUNTS</h1></center><br>

<style>

    .text

    {
        height: 100%;
        width: 100%;
        background-image: url("http://i.hizliresim.com/v4Qykv.png");
    }

</style>


<body class = text>

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>

<script src="js/scripts.js"></script>
</body>
</html>