<?php include 'session.php'?>
<?php include 'config.php'?>
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
<?php include 'NavigationBar.php';?>

   <section id="Content_here">

        <div class="content_here">
            <div class="profileContent">
                <h3>Profile</h3><br>
                <p>Welcome to Your profile</p>
                <div class="rowProfile">
                    <div class="ContentProfile">
                        <div class="img">
                           <div class="profileImg">
                            <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFp2Hyb4ttvkg/profile-displayphoto-shrink_800_800/0/1653287971468?e=1668643200&v=beta&t=XZTUU6ZTCEXB1DAA3L8zOxCulP0u7Rqf37XdcuyEjMc" alt="">
                            <i class="fa-solid fa-user-pen" onclick="" id="EditProfile"></i>

                           </div>
                           <div class="img_details">
                            <!-- LIBARY ID 209# -->
                            
                           </div>
                        </div>
                        <div class="details">
                            <div class="details_1">
                                <form action="" method="get">
                                    <h4>Details</h4><br>
                                   <?php
                                   $Email = $_SESSION['Email'];
                                   $sql = "SELECT * FROM register WHERE Email='$Email'";
                                   $run = mysqli_query($conn, $sql);
                                   $result = mysqli_fetch_assoc($run);
                                        $Firstname = mysqli_real_escape_string($conn, $result['Firstname']);
                                        $Middlename = mysqli_real_escape_string($conn, $result['Middlename']);
                                        $Lastname = mysqli_real_escape_string($conn, $result['Lastname']);
                                        $Email = mysqli_real_escape_string($conn, $result['Email']);
                                        $PhoneNumber = mysqli_real_escape_string($conn, $result['PhoneNumber']);
                                        $RegistrationNumber = mysqli_real_escape_string($conn, $result['RegistrationNumber']);
                                        $DateofBirth = mysqli_real_escape_string($conn, $result['DateofBirth']);

                                    echo '
                                                    <label for="Firstname">Firstname</label><br><br>
                                                    <input type="text" name="Firstname" id="" value="'.$Firstname.'"> <br><br>
                    
                                                    <label for="Middlename">Middlename</label><br><br>
                                                    <input type="text" name="Middlename" id="" value="'.$Middlename.'"> <br><br>
                    
                                                    <label for="Lastname">Lastname</label><br><br>
                                                    <input type="text" name="$Lastname" id="" value="'.$Lastname.'"> <br><br>
                    
                                                    <label for="RegistrationNo">RegistrationNo</label><br><br>
                                                    <input type="text" name="RegistrationNumber" id="" value="'.$RegistrationNumber.'" disabled> <br><br>
                                                
                                            </div>
                                            <div class="details_2">
                                                <br><br>
                                                <label for="Phone number">Phone number</label><br><br>
                                                <input type="text" name="PhoneNumber" id="" value="'.$PhoneNumber.'"> <br><br>
                
                                                <label for="Email">Email</label><br><br>
                                                <input type="text" name="Email" id="" value="'.$Email.'"> <br><br>
                
                                                <label for="Course">Course</label><br><br>
                                                <input type="text" name="" id="" value=""> <br><br>
                
                                                <label for="Date Of Birth">Date Of Birth</label><br><br>
                                                <input type="date" name="DateofBirth" id=""  max="2020-01-01" value="'.$DateofBirth.'"> <br><br>

                                                    
                                    ';

                                    if(isset($_POST['Update'])){

                                        $Firstname = $_POST['Firstname'];
                                        $Middlename = $_POST['Middlename'];
                                        $Lastname = $_POST['Lastname'];
                                        $Email = $_POST['Email'];
                                        $PhoneNumber = $_POST['PhoneNumber'];
                                        $RegistrationNumber = $_POST['RegistrationNumber'];
                                        $DateofBirth = $_POST['DateofBirth'];

                                        $sql = "UPDATE register SET Firstname='$Firstname', Middlename='$Middlename', Lastname='$Lastname', RegistrationNumber='$RegistrationNumber', PhoneNumber='$PhoneNumber', DateofBirth='$DateofBirth' WHERE Email='$Email'";
                                        $run = mysqli_query($conn, $sql);

                                        if($run){
                                            echo "data Has updated";
                                        }
                                    }
                                

                                   ?>
                                    <button name="Update" type="submit"
                                            style="border: none; padding: 10px 10px; margin-bottom: 10px; background-color: deepskyblue; color: white;">
                                    Update</button>
                            </form>
                            </div>

                        </div>

                    </div>
                    <div class="Activity">
                        <h3>Daily Tips</h3>
                        <ol>
                            <li>"I have always imagined that Paradise will be a kind of a Library."</li>
                            <li>"Nothing is pleasanter than exploring a library."</li>
                            <li>"The only thing that you absolutely have to know, is the location of the library."</li>
                            <li>I must say I find television very educational. The minute somebody turns it on, I go to the library and read a good book.</li>
                            <li>Libraries store the energy that fuels the imagination. They open up windows to the world and inspire us to explore and achieve, and contribute to improving our quality of life."                            </li>
                            <li>"The only thing that you absolutely have to know, is the location of the library."</li>
                            <li>"When in doubt go to the library."</li>
                        </ol>

                    </div>
                </div>

            </div>

        </div>
    
   </section>
   <script>
    function openFunction() {
        document.getElementById('menu').style.width="30vh";
    }
    function CloseFunction() {
        document.getElementById('menu').style.width="0vh";
    }
   </script>
</body>
</html>