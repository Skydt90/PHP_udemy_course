<?php include "includes/header.php"; ?>
<?php include "functions.php"; ?>
<?php login(); ?>

<body>
<div class="container">
   <h1 class="text-center">Login</h1>    
    <div class="col-xm-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="password">Password</label>   
                <input type="password" name="password" class="form-control"> 
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>  
    </div>   
<?php include "includes/footer.php"; ?>