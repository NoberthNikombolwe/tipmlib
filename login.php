<?php  include 'config.php'?>
<?php
session_start();
if(isset($_POST['submit'])){

    if(!empty($_POST['Email']) && !empty($_POST['Password'])){

        $Email = mysqli_real_escape_string($conn,$_POST['Email']);
        $Password = mysqli_real_escape_string($conn,md5($_POST['Password']));

        $sql = "SELECT * FROM register WHERE Email='".$Email."' && Password='".$Password."' limit 1";
        $run = mysqli_query($conn, $sql);
        #$number = mysqli_num_rows($run);

            if(mysqli_num_rows($run) == 1){
                    $_SESSION['Email'] = $Email;       
                    header("location: Dashboard.php");
            }else{
                echo "password or Email is wrong";
            }
    }else{
        echo "all fields are required";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font.google.com -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600;1,800;1,900&display=swap" rel="stylesheet">
    <!-- font.google.com -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Anek+Telugu:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!-- fontaweresome -->
    <script src="https://kit.fontawesome.com/347bbf72d9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../libr/img/logo.png" type="image/x-icon">
    <title>TIPM LIBRARY MANAGEMENT SYSTEM</title>
</head>
<body>
    <div class="login_form">
        <form action="" method="post">
            <h2>TIPM LIBARY MANAGEMENT SYSTEM</h2>
            <h4>Students Login Form</h4><br><br>

            <label for="email">Email</label><br>
            <input type="email" name="Email" id="email"><br><br>

            <label for="password">Password</label><br>
            <input type="password" name="Password" id="password"><br><br>

            <button name="submit" id="submit">Login</button><br><br>

            I don't Have Account! <a href="register.php"> Register now</a>
        </form>

    </div>
    
</body>
</html>