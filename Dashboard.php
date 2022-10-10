<?php include 'session.php'?>
<?php include 'config.php'?>
<?php
    $Email = $_SESSION['Email'];
    $sql = "SELECT * FROM register WHERE Email='$Email'";
    $run = mysqli_query($conn, $sql);
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
<?php include 'NavigationBar.php';?>

   <section id="Content_here">

        <div class="content_here">
            <div class="dashboard">
            <h3>Welcome, <span id="Fullname">
            <?php
                    $Email = $_SESSION['Email'];
                    $sql = "SELECT * FROM register WHERE Email='$Email'";
                    $run = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_assoc($run);
                    $Firstname = $data['Firstname'];
                    $Lastname = $data['Lastname'];
                    echo $Firstname . " " . $Lastname ?>
            </span></h3>
                <hr>
                
                <p>You have successfully logged into TIPM-Student Library  System Management</p>

                <h3>Profile</h3>
                <p>Here you can edit/update your personal information</p>

                <h3>All Books</h3>
                <p>Here you Can find Your Favorite Books Found in Our Library</p>

                <h3>Books Issue</h3>
                <p>Here you Can find Your Favorite Books Found in Our Library</p>

                <h3>Return</h3>
                <p>Here you Can find Your Favorite Books Found in Our Library</p>

                <h3>Not Return</h3>
                <p>Here you Can find Your Favorite Books Found in Our Library</p>

                <h3>Action</h3>
                <p>Here you Can find Your Favorite Books Found in Our Library</p>

                <h3>Action</h3>
                <p>Here you Can find Your Favorite Books Found in Our Library</p>
                
                <h3>FAQ</h3>
                <p>Here you Can find Your Favorite Books Found in Our Library</p>
                
                <h3>Help</h3>
                <p>Here you Can find Your Favorite Books Found in Our Library</p>
            </div>
            

        </div>
    
   </section>
   <script>
    function openFunction() {
        document.getElementById('menu').style.width="20vh";
    }
    function CloseFunction() {
        document.getElementById('menu').style.width="0vh";
    }
   </script>
</body>
</html>