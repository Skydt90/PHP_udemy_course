<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php createUser(); ?>

<body>
<div class="container">
   <h1 class="text-center">Create User</h1>    
    <div class="col-xm-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="password">Password</label>   
                <input type="password" name="password" class="form-control"> 
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Create">
        </form>  
    </div>   
<?php include "includes/footer.php"; ?>