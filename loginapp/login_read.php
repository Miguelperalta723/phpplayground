
<?php 
        include "db.php";

      
        
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("query failed" . mysqli_error());
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
        <?php 
        
            while($row = mysqli_fetch_assoc($result)){

        ?>

        <pre>
            <?php
                    print_r($row);
                    // echo $row["username"]
            ?>
        </pre>

        <?php
            }
        ?>
    </div>
</body>
</html>