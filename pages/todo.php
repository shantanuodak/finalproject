


<?php include "navbar.php";?>
<?php include "header.php";?>

<br>

<html>
<style>

    .text

    {
        height: 100%;
        width: 100%;
        background-image: url("http://i.hizliresim.com/v4Qykv.png");
    }

</style>

<body class=" text">
<h2>Enter the details to create a new task</h2>


<form action="index.php?page=tasks&action=create" method="post">
    <div class="form-group">
        <label for="exampleInputfname"> Owner E-mail</label>
        <input type="text" class="form-control" name="owneremail" id="exampleInputfname" aria-describedby="emailHelp" value="<?php echo $data->owneremail;?>">
    </div>

    <div class="form-group">
        <label for="exampleInputlname">Due Date</label>
        <input type="datetime-local" class="form-control" name="duedate" id="exampleInputlname" placeholder="Lastname" value="<?php echo $data->duedate;?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPhone">Message</label>
        <input type="text" class="form-control" name="message" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter message" value=" <?php echo $data->message;?> ">
    </div>
    <div class="form-group">
        <label for="exampleInputBirthday">Is Done?</label>
        <input type="text" class="form-control" name="isdone" id="exampleInputBirthday" aria-describedby="emailHelp" placeholder="Enter date of birth" value="<?php echo $data->isdone;?> ">
    </div>

    <button type="submit" class="btn btn-primary" value="Submit form">Submit </button>


</form>


<script src="js/scripts.js"></script>
</body>
</html>
