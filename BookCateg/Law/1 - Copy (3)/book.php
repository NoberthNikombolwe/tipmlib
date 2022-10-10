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
                    <img src="data:image/jpeg;base64,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" alt="">
                
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
                  
            $sql = "SELECT * FROM books WHERE B_ID='653.4'";
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