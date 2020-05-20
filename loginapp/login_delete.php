<?php include "db.php"?>
<?php include "functions.php"; ?>
<?php 
    if(isset($_POST['submit'])){
        delete();
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="login_delete.php" method="post">
            <label for="username">Username</label>
                <input type="text" name="username">
            <label for="password">Password</label>
                <input type="password" name="password">

             <select name="id">
                <?php  
                   showAllData(); 
                 ?>
            </select>
            <input type="submit" name="submit" value="Delete">
        </form>
    </div>
</html>