<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        username:<br>
        <input type="text" name="username"><br><br>
        email:<br>
        <input type="email" name="email"><br><br>
        password:<br>
        <input type="password" name="password"><br><br>
        <button name="submit">login</button>
    </form>


    <?php
    
         $host="localhost";
         $user="root";
         $password="";
         $db="laurance";

         $connection=mysqli_connect($host, $user, $password, $db);
         if(isset($_POST["submit"])){
            $username=$_POST["username"];
            $email=$_POST["email"];
            $pass=$_POST["password"];

            $sql="INSERT INTO tumukunde (username,email,password) VALUES ('$username', '$email', '$pass')";
            $added=mysqli_query($connection, $sql);

            if ($added) {
                echo "byagezeyo";
            }

            else{
                echo "byanze";
            }
         }
    
    ?>
</body>
</html> -->
<?php 
const data = [[1,2,3],[1,3,4],[4,5,6]];
let x=data[0][1];
let y=data[1][2];
let z=data[2][0];
console.log(x+y*z);
 ?>