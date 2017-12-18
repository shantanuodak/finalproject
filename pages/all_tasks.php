<?php include "header.php";?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=tasks&action=create"> Create New Task <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?page=accounts&action=logout">Logout</a>
            </li>


        </ul>
    </div>
</nav>






<body>

<?php
//this is how you print something

if ($data == false){
    echo ' <p>You do Not have any tasks</p>';
}else{

    print utility\htmlTable::genarateTableFromMultiArray($data);
}


?>


<script src="js/scripts.js"></script>
</body>
</html>