<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Comic Wars Illustrations by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Comic Wars &bull; IllyaKing.com</title>
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
                                ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/comicwars/cardBackThumb.jpg' alt='Comic Wars Card' /></a>", "image-1", "<img src='../img/portfolio/comicwars/cardBack.jpg' alt='Comic Wars Card'", "image-16", "image-2", "Comic Wars Card", "Photoshop. Design for Comic Wars Redesign card game." ],
                                ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/comicwars/characterCardThumb.jpg' alt='Character Card' /></a>", "image-2", "<img src='../img/portfolio/comicwars/characterCard.jpg' alt='Character Card'", "image-1", "image-3", "Character Card", "Photoshop. Proposed design for character cards." ],
                                ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/comicwars/actionCardRightJabThumb.jpg' alt='Right Jab Action Card' /></a>", "image-3", "<img src='../img/portfolio/comicwars/actionCardRightJab.jpg' alt='Right Jab Action Card", "image-2", "image-4", "Right Jab Action Card", "Photoshop. Proposed design for action card." ],
                                ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/comicwars/counterCardThumb.jpg' alt='Counter Card' /></a>", "image-4", "<img src='../img/portfolio/comicwars/counterCard.jpg' alt='Counter Card'", "image-3", "image-5", "Counter Card", "Photoshop. Proposed design for counter card." ],
                                ["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/comicwars/actionCard01Thumb.jpg' alt='Action Card' /></a>", "image-5", "<img src='../img/portfolio/comicwars/actionCard01.jpg' alt='Action Card'", "image-4", "image-6", "Action Card", "Photoshop. Proposed action card design." ],
                                ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/comicwars/actionCard9MMShotThumb.jpg' alt='9 MM Action Card' /></a>", "image-6", "<img src='../img/portfolio/comicwars/actionCard9MMShot.jpg' alt='9 MM Action Card'", "image-5", "image-7", "9 MM Action Card", "Photoshop. Proposed action card design." ],
                                ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/comicwars/alphamanStaffThumb.jpg' alt='Alphaman with Staff' /></a>", "image-7", "<img src='../img/portfolio/comicwars/alphamanStaff.jpg' alt='Alphaman with Staff'", "image-6", "image-8", "Alphaman with Staff", "Pigma Micron on bristol. Alphaman, one of the characters from Crow Works Comics." ],
                                ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/comicwars/crowBackhandThumb.jpg' alt='Crow slapping villain' /></a>", "image-8", "<img src='../img/portfolio/comicwars/crowBackhand.jpg' alt='Crow slapping villain'", "image-7", "image-9", "Crow slapping villain", "Pigma Micron on Bristol. Crow, one of the characters from Crow Works Comics." ],
                                ["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/comicwars/crowElbowThumb.jpg' alt='Crow with Elbow' /></a>", "image-9", "<img src='../img/portfolio/comicwars/crowElbow.jpg' alt='Crow with Elbow'", "image-8", "image-10", "Crow with Elbow", "Pigma Micron on Bristol. Crow, one of the characters from Crow Works Comics." ],
                                ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/comicwars/freakshowColorThumb.jpg' alt='Freakshow' /></a>", "image-10", "<img src='../img/portfolio/comicwars/freakshowColor.jpg' alt='Freakshow'", "image-9", "image-11", "Freakshow", "Pigma Micron on Bristol. Coloring with Photoshop." ],
                                ["<a href='#image-11'><img class='fade-in eleven' src='../img/portfolio/comicwars/jesterKneeCapThumb.jpg' alt='Jester shooting Crow' /></a>", "image-11", "<img src='../img/portfolio/comicwars/jesterKneeCap.jpg' alt='Jester shooting Crow'", "image-10", "image-12", "Jester shooting Crow", "Pigma Micron on Bristol. Jester and Crow, one of the characters from Crow Works Comics." ],
                                ["<a href='#image-12'><img class='fade-in twelve' src='../img/portfolio/comicwars/machoManThumb.jpg' alt='Macho Man' /></a>", "image-12", "<img src='../img/portfolio/comicwars/machoMan.jpg' alt='Macho Man'", "image-11", "image-1", "Macho Man", "Pigma Micron on Bristol. Illustration for action card." ]                     
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
            <p>Crow, Crow Works Comics, and related properies were created by <a href="https://www.linkedin.com/in/william-rail-046b8693" target="_blank">William Rail</a>.<br>
                Additional images are located <strong><a href="https://pics.illyaking.com/index.php?/category/31" target="_blank">HERE</a></strong></p>

        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
