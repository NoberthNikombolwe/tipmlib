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
                  
            $sql = "SELECT * FROM books WHERE B_ID='808.5'";
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