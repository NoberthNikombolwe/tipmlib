<?php  include_once 'config.php'?>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['Firstname']) && !empty($_POST['Middlename']) && !empty($_POST['Lastname']) && !empty($_POST['Email']) && !empty($_POST['PhoneNumber']) && !empty($_POST['RegistrationNumber']) && !empty($_POST['DateofBirth']) && !empty($_POST['Password'])){
       
        $Firstname = mysqli_real_escape_string($conn, $_POST['Firstname']);
        $Middlename =mysqli_real_escape_string($conn, $_POST['Middlename']);
        $Lastname =mysqli_real_escape_string($conn, $_POST['Lastname']);
        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $PhoneNumber = mysqli_real_escape_string($conn,$_POST['PhoneNumber']);
        $RegistrationNumber = mysqli_real_escape_string($conn,$_POST['RegistrationNumber']);
        $DateofBirth = mysqli_real_escape_string($conn,$_POST['DateofBirth']);
        $Password = mysqli_real_escape_string($conn,md5($_POST['Password']));
        
        $sql = "INSERT INTO register(id, Firstname, Middlename, Lastname, Email, PhoneNumber, RegistrationNumber, DateofBirth, Password) VALUES('', '$Firstname', '$Middlename', '$Lastname', '$Email', '$PhoneNumber', '$RegistrationNumber', '$DateofBirth', '$Password')";
        $run = mysqli_query($conn, $sql);
        if($run){
            echo "inserted";
            header("location: login.php");
        }
    }else{
        echo "all field are requred";
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
    <div class="Register">
        
            <div class="MyForm">
                <h3>Registration Form</h3>
                <form action="" method="post">
                    
                    <label for="Firstname">Firstname</label><br>
                    <input type="text" name="Firstname" id="Firstname"><br><br>
        
                    <label for="Middlename">Middlename</label><br>
                    <input type="text" name="Middlename" id="Middlename"><br><br>
        
                    <label for="Lastname">Lastname</label><br>
                    <input type="text" name="Lastname" id="Lastname"><br><br>
        
                    <label for="Email">Email</label><br>
                    <input type="email" name="Email" id="Email"><br><br>
        
                    <label for="PhoneNumber">PhoneNumber</label><br>
                    <input type="tel" name="PhoneNumber" id="PhoneNumber"><br><br>
        
                    <label for="RegistrationNumber">RegistrationNumber</label><br>
                    <input type="text" name="RegistrationNumber" id="RegistrationNumber"><br><br>

                    <label for="DateofBirth">Date of Birth</label><br>
                    <input type="date" name="DateofBirth" id="DateofBirth" max="01/01/2010"><br><br>
        
                    <label for="Password">Password</label><br>
                    <input type="password" name="Password" id="Password"><br><br>
        
                    <label for="Re_Password">Password</label><br>
                    <input type="password" name="" id=""><br><br>

                    <button id="submitReg" type="submit" name="submit">Submit</button>
                </form>
            </div>
        
    </div>
</body>
</html>