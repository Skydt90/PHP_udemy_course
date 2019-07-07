<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php deleteUser(); ?>

<body>
    
<div class="container">
   <h1 class="text-center">Delete User</h1>   
    <div class="col-xm-6">
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <select name="id" id="">
                   <?php
                        showAllData();
                   ?>
                </select>
            </div>    
            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
         </form>                  
    </div>   
<?php include "includes/footer.php"; ?>