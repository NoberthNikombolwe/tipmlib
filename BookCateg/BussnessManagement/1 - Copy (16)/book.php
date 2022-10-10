<?php include '../../../session.php'?>
<?php include '../../../config.php'?>
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

    <link rel="stylesheet" href="../../../style.css">
    <link rel="shortcut icon" href="../../../../libr/img/logo.png" type="image/x-icon">
    <title>TIPM LIBRARY MANAGEMENT SYSTEM</title>
</head>
<body>
<?php include '../../../NavigationBar.php'?>

   <section id="Content_here">

        <div class="content_here">
            <div class="bookNO_back">

                <div class="bookimg">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41IEPy0fRNL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg" alt="">
                
                </div>

                <div class="heading">
                    
            <?php
            // $Email = $_SESSION['Email'];
            // $B_ID = $_POST['B_ID'];
            // $B_TITLE =$_POST['B_TITLE'];
            // $EDITION =$_POST['EDITION'];
            // $AUTHOUR =$_POST['AUTHOUR'];
            // $PUBLISHER =$_POST['PUBLISHER'];
            // $PLACE =$_POST['PLACE'];
            // $PUB_YEAR =$_POST['PUB_YEAR'];
            // $ISBN =$_POST['ISBN'];
            // $CATEGORY =$_POST['CATEGORY'];
                  
            $sql = "SELECT * FROM books WHERE B_ID='217.4'";
            $run = mysqli_query($conn, $sql);
            if(mysqli_num_rows($run)>0){
                foreach ($run as $data) {
                    ?>
                    <h1><?=$data['CATEGORY']?></h1>
                    <!-- <?php session_start();
                    $_SESSION['B_TITLE'];
                    $_SESSION['B_ID'];
                    $_SESSION[''];
                    ?> -->
                    <h3 name="B_TITLE"><?=$data['B_TITLE']?></h3>

                    By <u><i><?=$data['AUTHOUR']?></i></u>
                </div>
            </div>
            <div class="hrer">
            <div class="BookDetails">
                <div class="Details">
                    <table>
                        <tr>
                            <td>FORMAT</td>
                            <td>Physical Book</td>
                        </tr>
                        
                        <tr>
                            <td>AUTHOUR</td>
                            <td><?=$data['AUTHOUR']?></td>
                        </tr>

                        <tr>
                            <td>ISBN</td>
                            <td><?=$data['ISBN']?></td>
                        </tr>

                        <tr>
                            <td>PUBLISH YEAR</td>
                            <td><?=$data['PUB_YEAR']?></td>
                        </tr>

                        <tr>
                            <td>Category</td>
                            <td><?=$data['CATEGORY']?></td>
                        </tr>

                        <tr>
                            <td>EDITION</td>
                            <td><?=$data['EDITION']?></td>
                        </tr>

                        <tr>
                            <td>PLACE</td>
                            <td><?=$data['PLACE']?></td>
                        </tr>
                    </table>

                </div>
                <div class="Bookcontent">
                    <h4>About Book</h4>
                    <p><b>A #1 LibraryReads and Indie Next Pick!
                        From the New York Times bestselling author of The Love Hypothesis comes a new STEMinist rom-com in which a scientist is forced to work on a project with her nemesis—with explosive results.
                    </b></p><br>

                    <p id="">
                        Like an avenging, purple-haired Jedi bringing balance
                         to the mansplained universe, Bee Königswasser lives 
                         by a simple code: What would Marie Curie do? If NASA 
                         offered her the lead on a neuroengineering project—a 
                         literal dream come true after years scraping by on the
                        crumbs of academia—Marie would accept without hesitation. 
                        Duh. But the mother of modern physics never had to co-lead with 
                        Levi Ward.
  Sure, Levi is attractive in a tall, dark, and piercing-eyes kind of way. And sure, he caught her in his powerfully corded arms like a romance novel hero when she accidentally damseled in distress on her first day in the lab. But Levi made his feelings toward Bee very clear in grad school—archenemies work best employed in their own galaxies far, far away.   Now, her equipment is missing, the staff is ignoring her, and Bee finds her floundering career in somewhat of a pickle. Perhaps it’s her occipital cortex playing tricks on her, but Bee could swear she can see Levi softening into an ally, backing her plays, seconding her ideas…devouring her with those eyes. And the possibilities have all her neurons firing. But when it comes time to actually make a move and

                    </p>
                    <br>
                    <form action="" method="post">
                    <?php 
                    if(isset($_POST['BorrowNow'])){
           


                    }
                    ?>
                    <button type="submit" name="BorrowNow">
                    <a href="" id="BorrowNow">Borrow Now</a>
                    </button>
                    </form>
                </div>

            </div>
    
            <div class="may_interested">
                <h3>Also of Interest</h3>
                <div class="interested">
                    <div class="bookof">
                        <img src="https://global.oup.com/academic/covers/pdp/9780198841531" alt="">
                    </div>

                    <div class="bookof">
                        <img src="https://global.oup.com/academic/covers/pdp/9780198743491" alt="">
                    </div>

                    <div class="bookof">
                        <img src="https://global.oup.com/academic/covers/pdp/9780198823391" alt="">
                    </div>

                    <div class="bookof">
                        <img src="https://global.oup.com/academic/covers/pdp/9780198733034" alt="">
                    </div>

                    <div class="bookof">
                        <img src="https://global.oup.com/academic/covers/pdp/9780199577934" alt="">
                    </div>
                    
                    <div class="bookof">
                        <img src="https://global.oup.com/academic/covers/pdp/9780198804383" alt="">
                    </div>
                </div>
                

            </div>

    
                   
            <?php
                }

            }else{
                ?>
                <h4>No  Book record Found</h4>
                <?php
            }
            
            
            
            ?>
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