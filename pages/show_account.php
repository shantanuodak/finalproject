<?php include "header.php"?>

<?php include "navbar.php"?>

<body>




<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="POST">
    <div>
        <div class="col">
            <h2>Profile</h2>
            <h4>First name</h4>
            <input type="text" class="form-control" placeholder="First name" name="fname" value="<?php echo $data->fname; ?>">
        </div>
        <div class="col">
            <h4>Last name </h4>
            <input type="text" class="form-control" placeholder="Last name" name="lname" value="<?php echo $data->lname; ?>">
        </div>
    </div>
    <div>
        <div class="col">
            <h4>E-mail </h4>
            <input type="email" class="form-control" placeholder="E- mail" name="email" value="<?php echo $data->email; ?>">
        </div>
        <div class="col">
            <h4>Phone </h4>
            <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $data->phone; ?>">
        </div>
    </div>
    <div>
        <div class="col">
            <h4>Date of Birth </h4>
            <input type="date" class="form-control" placeholder="DOB" name="birthday" value="<?php echo $data->birthday; ?>">
        </div>
        <div class="col">
            <h4>Gender</h4>
            <input type="text" class="form-control" placeholder="Gender" name="gender" value="<?php echo $data->gender; ?>">
        </div>
    </div>
    <br>

    <input type="submit" value="Submit form" class="btn btn-primary">

</form>

<br>

<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete" class="btn btn-primary">Delete</button>
</form>



<script src="js/scripts.js"></script>
</body>
</html>