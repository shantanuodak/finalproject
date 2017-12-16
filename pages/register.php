<?php include 'header.php' ?>


<body>

<h1>Registration form</h1>


<form action="index.php?page=accounts&action=register" method="post">
    <div class="form-group">
        <label for="exampleInputfname">First name</label>
        <input type="text" class="form-control" name="fname" id="exampleInputfname" aria-describedby="emailHelp" placeholder="Enter first name">
    </div>
    <div class="form-group">
        <label for="exampleInputlname">Last name</label>
        <input type="text" class="form-control" name="lname" id="exampleInputlname" placeholder="Lastname">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">E-mail</label>
        <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter valid e-mail">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPhone">Phone</label>
        <input type="text" class="form-control" name="phone" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter phone number">
    </div>
    <div class="form-group">
        <label for="exampleInputBirthday">Date of Birth</label>
        <input type="text" class="form-control" name="birthday" id="exampleInputBirthday" aria-describedby="emailHelp" placeholder="Enter date of birth">
    </div>
    <div class="form-group">
        <label for="exampleInputGender">Gender</label>
        <input type="text" class="form-control" name="gender" id="exampleInputGender" aria-describedby="emailHelp" placeholder="Enter your gender">
    </div>
    <div class="form-group">
        <label for="exampleInputGender">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your password">
    </div>


    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>



<script src="js/scripts.js"></script>
</body>
</html>
