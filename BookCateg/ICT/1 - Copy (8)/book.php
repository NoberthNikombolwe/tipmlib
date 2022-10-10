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
                  
            $sql = "SELECT * FROM books WHERE B_ID='952.9'";
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