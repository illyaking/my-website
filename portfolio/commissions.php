<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Commssions from Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Commissions &bull; IllyaKing.com</title>
    <link rel="icon" href="../img/kingLogoBlack.png" type="image/png" sizes="24x24">

    <!--CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/grid.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/filterize.css" type="text/css" />

</head>

<body>
    <?php include '../includes/header.inc.php'; ?>
    <?php include '../includes/nav.inc.php'; ?>
    <main>

        <div class="container-fluid">
            <div class="row">

                <!-- Gallery - START copying from here -->
                <div id="filterize">
                    <div class="gallery">
                        <ul class="gallery-items">
                            
                            <?php
                            $list = [
                                ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/commissions/webcomicChatLogoThumb.jpg' alt='Webcomic Chat Logo' /></a>", "image-1", "<img src='../img/portfolio/commissions/webcomicChatLogo.jpg' alt='Webcomic Chat Logo'", "image-16", "image-2", "Webcomic Chat Logo", "Adobe Illustrator Vector Image" ],
                                ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/commissions/alienTrashPodThumb.jpg' alt='Alien Trash Pod' /></a>", "image-2", "<img src='../img/portfolio/commissions/alienTrashPod.jpg' alt='Alien Trash Pod'", "image-1", "image-3", "Alien Trash Pod", "Photoshop. Ship design for independent movie." ],
                                ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/commissions/alienSpaceShipThumb.jpg' alt='Alien Space Ship' /></a>", "image-3", "<img src='../img/portfolio/commissions/alienSpaceShip.jpg' alt='Alien Space Ship", "image-2", "image-4", "Alien Space Ship", "Photoshop. Ship design for independent movie." ],
                                ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/commissions/alienFighterThumb.jpg' alt='Alien Fighter' /></a>", "image-4", "<img src='../img/portfolio/commissions/alienFighter.jpg' alt='Alien Fighter'", "image-3", "image-5", "Alien Fighter", "Photoshop. Ship design for independent movie." ],
                                ["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/commissions/thorLogoThumb.jpg' alt='Thor Logo' /></a>", "image-5", "<img src='../img/portfolio/commissions/thorLogo.jpg' alt='Thor Logo'", "image-4", "image-6", "Thor Logo", "Photoshop. For Weights and Dimensions Department." ],
                                ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/commissions/weightsDimensionsLogoThumb.jpg' alt='Weights and Dimensions Logo' /></a>", "image-6", "<img src='../img/portfolio/commissions/weightsDimensionsLogo.jpg' alt='Weights and Dimensions Logo'", "image-5", "image-7", "Weights and Dimensions Logo", "Photoshop. For Weights and Dimensions Department." ],
                                ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/commissions/pioneerLogoThumb.jpg' alt='Pioneer Logo' /></a>", "image-7", "<img src='../img/portfolio/commissions/pioneerLogo.jpg' alt='Pioneer Logo'", "image-6", "image-8", "Pioneer Logo", "Photoshop. For Northwest Freight Analysis Department." ],
                                ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/commissions/myTwoScentsThumb.jpg' alt='My Two Scents' /></a>", "image-8", "<img src='../img/portfolio/commissions/myTwoScents.jpg' alt='My Two Scents'", "image-7", "image-9", "My Two Scents", "Pigma Micron on Bristol. Color in Photoshop. Logo for candle company." ],
                                ["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/commissions/freightAnalysis02Thumb.jpg' alt='TSA Avengers' /></a>", "image-9", "<img src='../img/portfolio/commissions/freightAnalysis02.jpg' alt='TSA Avengers'", "image-8", "image-10", "TSA Avengers", "Pigma Micron on Bristol. Color in Photoshop. For Freight Analysis Department." ],
                                ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/commissions/freightAnalysis01Thumb.jpg' alt='Senior Managers' /></a>", "image-10", "<img src='../img/portfolio/commissions/freightAnalysis01.jpg' alt='Senior Managers'", "image-9", "image-11", "Senior Managers", "Pigma Micron on Bristol. Color in Photoshop. For Freight Analysis Department." ],
                                ["<a href='#image-11'><img class='fade-in eleven' src='../img/portfolio/illustrations/elkStatueThumb.jpg' alt='Elk Statue' /></a>", "image-11", "<img src='../img/portfolio/illustrations/elkStatue.jpg' alt='Elk Statue'", "image-10", "image-12", "Elk Statue", "Pigma Micron on Bristol. Unsued comic cover." ],
                                ["<a href='#image-12'><img class='fade-in twelve' src='../img/portfolio/commissions/lacelleRoselleThumb.jpg' alt='Lacelle Roselle Invitation' /></a>", "image-12", "<img src='../img/portfolio/commissions/lacelleRoselle.jpg' alt='Lacelle Roselle Invitation'", "image-11", "image-1", "Lacelle Roselle Invitation", "Photoshop. Invitation for Fashion Company." ]                     
                            ];
                            foreach($list as $lists) {
                                echo "<li>" . $lists[0] . 
                                     "<div id='" . $lists[1] . 
                                     "' class='lightbox'>" . $lists[2] .
                                     " /><div class='lightbox-navigation'><a class='previous icon' href='#" . $lists[3] . 
                                     "'>&#8249;</a><a class='next icon' href='#" . $lists[4] . 
                                     "'>&#8250;</a><a class='close-overlay' href='#close'></a><a class='close icon' href='#close'>&#10006;</a></div><div class='lightbox-caption'><h3>" . $lists[5] . 
                                     "</h3><p>" . $lists[6] . 
                                     "</p></div><div></li>";
                            }
                            ?>
                        
                        </ul>
                        <!--/.gallery-items-->
                    </div>
                    <!--/.gallery-->
                </div>
                <!--/.filterized-->
            </div>
            <!--/.row-->
            <!-- / Gallery - END copying here -->

            <p>Additional images are located <strong><a href="https://pics.illyaking.com/index.php?/category/26" target="_blank">HERE</a></strong></p>

        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
