<?php include "header.php";?>

<body>

<a href="index.php?page=tasks&action=create">Create Task</a>


<?php
//this is how you print something

if ($data == false){
    echo ' <p>You do Not have any tasks</p>';
}else{

    print utility\htmlTable::genarateTableFromMultiArray($data);
}

 echo '<h1><a href="index.php?page=accounts&action=logout">Logout</a></h1>';
 echo '<h1><a href="index.php">Home</a></h1>';


?>


<script src="js/scripts.js"></script>
</body>
</html>