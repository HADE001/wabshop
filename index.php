<?php
session_start();

if(!isset($_SESSION["user"])){
    header("location: login.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $_SESSION ['user']['user_name'];?>
    <a href="/logout.php">logout</a>

    <table>
        <thead>
            <th>user id</th>
            <th>name</th>
            <th>ussrname</th>
            <th>password</th>
        </thead>
        <tbody>
            <?php
            require("./connect.php");

            $sql = "SELECT * FROM `user` ";
            $result = mysqli_query($conn, $sql);
            while($user = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $user["user_id"]; ?></td>
                    <td><?php echo $user["user_name"]; ?></td>
                    <td><?php echo $user["user_username"]; ?></td>
                    <td><?php echo $user["user_password"]; ?></td>
                    
                    
                    
                </tr>
            <?Php } ?> 
        
        </tbody>
    </table>


</body>
</html>