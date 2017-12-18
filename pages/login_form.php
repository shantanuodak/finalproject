
<?php include "header.php";?>


</form>
<h1><CENTER> WELCOME TO THE FINAL PROJECT OF IS 601 </CENTER></h1><br>

<h1><CENTER>" TASK MANAGEMENT SYSTEM "</CENTER></h1>

<h1>Account Login </h1><br>


<form action="index.php?page=accounts&action=login" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button> <br>


    <a href="index.php?page=accounts&action=register">Not registered? Register here</a>



</form>

