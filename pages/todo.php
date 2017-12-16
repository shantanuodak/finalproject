<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<form action="index.php?page=tods&action=register" method="post">
    Owner Email:<input type="text" name="owneremail" value= "<?php if(property_exists($data->owneremail)){echo $data->owneremail;}?> "> <br>
    Due date: <input type="text" name="Duedate" value="<?php if(property_exists($data->duedate)){echo $data->duedate;}?> " > <br>
    Message: <input type="text" name="Message" value="<?php if(property_exists($data->message)){echo $data->message;}?> "> <br>
    Is Done: <input type="text" name="isdone" value="<?php if(property_exists($data->isdone)){echo $data->isdone;}?>  "> <br>

    <input type="submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>