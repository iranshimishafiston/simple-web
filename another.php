<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="another.css">
</head>
<body>
<body>
  <div class="fiston">
    <h1>registration form</h1>
    <form action="" method="post">
        <label>username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label>password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <label>email:</label><br>
        <input type="email" name="email" id="email"><br><br>
        <button name="submit">login</button>
    </form>
  </div>

    <?php   
    
           $host="localhost";
           $user="root";
           $password="";
           $db="kiyumba";

           $conn=mysqli_connect($host, $user, $password, $db);

           if(isset($_POST["submit"])) {
              $username=$_POST["username"];
              $pass=$_POST["password"];
              $email=$_POST["email"];

              $sql="INSERT INTO student (username, password, email) VALUES ('$username', '$pass', '$email')";
              $added=mysqli_query($conn, $sql);

              if ($added) {
                // echo "boro zagezeyo bro";
              }
              else {
                // echo "boro zanze mn";
              }
           }

    
    ?>
</body>
    <center>
    <body>
    <div class="kendrick">
    <form action="" method="post">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="search" name="search" id="search">&nbsp;&nbsp;<button name="searchh" id="searchhh">search</button>
    </form>
    
    <table border="1" cellspacing="0">
        
<?php
       error_reporting(0);
       $search=$_POST["search"];
       $connection=mysqli_connect("localhost", "root", "", "kiyumba");

       if(isset($_POST["searchh"])){
          $display="SELECT * FROM student WHERE username='$search'";
          $result=mysqli_query($connection, $display);

          if(mysqli_num_rows($result)>0){
              $row=mysqli_fetch_assoc($result);

            echo "
              
            <tr style='height: 70px; width: 400px;'>
              <td>".$row["username"]."</td>
              <td>".$row["email"]."</td>
              <td>".$row["password"]."</td>
            </tr>
              
            ";
          }
       }

?>
</table>
</div>
</body>
    <table border="1" cellspacing="0">
        <tr>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>operation</th>
            <th>change</th>
        </tr>
        <?php   
        
              $connection=mysqli_connect("localhost", "root", "", "kiyumba");
              $display="SELECT * FROM student";
              $result=mysqli_query($connection, $display);

              if(isset($_GET["id"])){
                $id=$_GET["id"];
                $delete=mysqli_query($connection, "DELETE FROM `student` WHERE `id`='$id'");
                header("location:another.php");
                die();
              }
              
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                   echo "
                   
                           <tr>
                                 <td>".$row["username"]."</td>
                                 <td>".$row["email"]."</td>
                                 <td>".$row["password"]."</td>
                                 <td>
                                     <a href='another.php? id=".$row["id"]."' class='btn'>delete</a>
                                 </td>
                                 <td>
                                    <a href='another.php?' class='edit'>edit</a>
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