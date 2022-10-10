<?php include 'config.php'?>
<?php
if(isset($_POST['Update'])){
    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Lastname = $_POST['Lastname'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email = $_POST['Email'];
    $DateofBirth = $_POST['DateofBirth'];

    $sql = "UPDATE register SET Firstname='$Firstname', Middlename='$Middlename', Lastname='$Lastname', PhoneNumber='$PhoneNumber', DateofBirth='$DateofBirth' WHERE Email='$Email'"; #RegistrationNumber='$RegistrationNumber'
    $run = mysqli_query($conn, $sql);

    if($run){
        header("location: login.php");
       exit(0);
    }
}

?>