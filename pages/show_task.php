<!doctype html>

<html lang="en">
    <meta charset="utf-8">

    <title>Tasks</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->


<style>

    .text

    {
        height: 100%;
        width: 100%;
        background-image: url("http://i.hizliresim.com/v4Qykv.png");
    }

</style>

<body class= "text">

<?php
//this is how you print something  $data contains the record that was selected on the table.

print_r($data);
?>
 <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>




<script src="js/scripts.js"></script>
</body>
</html>