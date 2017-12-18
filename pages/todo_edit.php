<?php include "header.php";?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=tasks&action=create"> Create Task <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?page=accounts&action=logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<br>


<body>

<form action="index.php?page=tasks&action=save&id=<?php echo $data->id;?>" method="post">
    <div class="form-group">
        <label for="exampleInputfname"> Owner E-mail</label>
        <input type="text" class="form-control" name="owneremail" id="exampleInputfname" aria-describedby="emailHelp" placeholder="Enter first name" value="<?php echo $data->owneremail;?>">
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

<br>




<form action="index.php?page=tasks&action=delete&id= <?php echo $data->id; ?> "  method="post" id="form1">
    <button type="submit"  value="delete" class="btn btn-primary" >Delete</button>
</form>


<script src="js/scripts.js"></script>
</body>
</html>
