<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rev.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        usernme:<br>
        <input type="text" name="username" id="username"><br><br>
        email:<br>
        <input type="textemail" name="email" id="email"><br><br>
        password:<br>
        <input type="password" name="password" id="password"><br><br>
        <button name="submit">login</button><br>

        <?php  
        
            $host="localhost";
            $user="root";
            $password="";
            $db="kendrick";

            $conn=mysqli_connect($host, $user, $password, $db);

            if(isset($_POST["submit"])){
                $username=$_POST["username"];
                $email=$_POST["email"];
                $pass=$_POST["password"];

                $sql="INSERT INTO ghee (username,email,password) VALUES ('$username', '$email', '$pass')";

                $added=mysqli_query($conn, $sql);
                if($added){
                    echo "byabaye";
                }

                else{
                    echo "byanze";
                }
            }
        
        ?>
    </form>
</body>
<br><br>
<body>
    <form action="" method="post">
        <input type="search" name="search" id="search"><button name="searchh">search</button>
    </form>

    <?php  
          $connecton=mysqli_connect("localhost", "root", "", "kendrick");

          if(isset($_POST["searchh"])){
            $search=$_POST["search"];
            $display="SELECT * FROM ghee WHERE username='$search'";
            $result=mysqli_query($connecton, $display);

            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);

                echo $row["id"]."<br>";
                echo $row["username"]."<br>";
                echo $row["email"]."<br>";
                echo $row["password"]."<br>";
            }
          }
    
    ?>
</body>
<br><br>
<body>
    <center>
<table border="">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>password</th>
        <th>delete</th>
        <th>edit</th>
    </tr>
    <?php
    
         $connection=mysqli_connect("localhost", "root", "", "kendrick");
         $display="SELECT * FROM ghee";
         $result=mysqli_query($connecton, $display);

         if(isset($_GET["id"])){
            $id=$_GET["id"];
            $delete=mysqli_query($connection, "DELETE FROM `ghee` WHERE `id`='$id'");
            header("location:revision.php");
            die();
         }

         if(isset($_GET["id"])){
            $id=$_GET["id"];
            $update=mysqli_query($connection, "UPDATE `ghee` SET `id`='[value-1]',`username`='[$username]',`email`='[$email]',`password`='[$pass]' WHERE `id`='$id' ");
            header("location:revision.php");
            die();
         }

         if(mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_assoc($result)) {
                echo "
                
                       <tr>
                             <td>".$row["id"]."</td>
                             <td>".$row["username"]."</td>
                             <td>".$row["email"]."</td>
                             <td>".$row["password"]."</td>
                             <td>
                                <a href='revision.php? id=".$row["id"]."'>delete</a>
                             </td>
                             <td>
                                <a href='revision.php? id=".$row["id"]."'>edit</a>
                             </td>
                       </tr>
                
                ";
            };
         }
    ?>
</table>
    </center>
</body>
</html>