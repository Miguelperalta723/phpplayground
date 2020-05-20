
<?php 
    // Create
    if(isset($_POST["submit"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $connection = mysqli_connect("localhost" , "root" , "", "loginapp");

            if($connection){
                echo "connected";
            } else {
                die("database connection failed");
            }
        
        $query = "INSERT INTO users(username, password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query failed" . mysqli_error());
        }

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
        <form action="loginform.php" method="post">
            <label for="username">Username</label>
                <input type="text" name="username">
            <label for="password">Password</label>
                <input type="password" name="password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>