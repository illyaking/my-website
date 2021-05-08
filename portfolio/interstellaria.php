<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Interstellaria Concepts by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Interstellaria Concepts &bull; IllyaKing.com</title>
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
                                    ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/interstellaria/introGfxThumb.jpg' alt='Intro Graphic' /></a>", "image-1", "<img src='../img/portfolio/interstellaria/introGfx.jpg' alt='Intro Graphic'", "image-12", "image-2", "Introduction Graphic", "Photoshop Illustration" ],
                                    ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/interstellaria/squidAlienThumb.jpg' alt='Squid Alien' /></a>", "image-2", "<img src='../img/portfolio/interstellaria/squidAlien.jpg' alt='Squid Alien'", "image-1", "image-3", "Squid Alien", "Pencil Illustration." ],
                                    ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/interstellaria/needleGunThumb.jpg' alt='Needle Gun' /></a>", "image-3", "<img src='../img/portfolio/interstellaria/needleGun.jpg' alt='Needle Gun'", "image-2", "image-4", "Needle Gun", "Photoshop Illustration" ],
                                    ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/interstellaria/dropPodThumb.jpg' alt='Drop Pod' /></a>", "image-4", "<img src='../img/portfolio/interstellaria/dropPod.jpg' alt='Drop Pod'", "image-3", "image-5", "Drop Pod", "Photoshop Illustration" ],
                                    ["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/interstellaria/brainGodThumb.jpg' alt='Brain God' /></a>", "image-5", "<img src='../img/portfolio/interstellaria/brainGod.jpg' alt='Brain God'", "image-4", "image-6", "Brain God", "Photoshop Illustration" ],
                                    ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/interstellaria/lightDriveThumb.jpg' alt='Light Drive Concept' /></a>", "image-6", "<img src='../img/portfolio/interstellaria/lightDrive.jpg' alt='Light Drive Concept'", "image-5", "image-7", "Light Drive Concept", "Photoshop Ilustration" ],
                                    ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/interstellaria/lightDriveConceptThumb.jpg' alt='Light Drive Concept' /></a>", "image-7", "<img src='../img/portfolio/interstellaria/lightDriveConcept.jpg' alt='Light Drive Concept'", "image-6", "image-8", "Light Drive Concept", "Photoshop Illustration" ],
                                    ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/interstellaria/tradeCorpLogoThumb.jpg' alt='Trade Corp Logo' /></a>", "image-8", "<img src='../img/portfolio/interstellaria/tradeCorpLogo.jpg' alt='Trade Corp Logo'", "image-7", "image-9", "Trade Corp Logo", "Photoshop Illustration" ],
                                    ["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/interstellaria/tradeCorpOrbThumb.jpg' alt='Trade Corp Orb' /></a>", "image-9", "<img src='../img/portfolio/interstellaria/tradeCorpOrb.jpg' alt='Trade Corp Orb'", "image-8", "image-10", "Trade Corp Orb", "Photoshop Illustration" ],
                                    ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/interstellaria/statusBoxThumb.jpg' alt='Status Box' /></a>", "image-10", "<img src='../img/portfolio/interstellaria/statusBox.jpg' alt='Status Box'", "image-9", "image-11", "Status Box", "Photoshop Illustration" ],
                                    ["<a href='#image-11'><img class='fade-in eleven' src='../img/portfolio/interstellaria/poster01Thumb.jpg' alt='Poster 01' /></a>", "image-11", "<img src='../img/portfolio/interstellaria/poster01.jpg' alt='Poster 01'", "image-10", "image-12", "Poster 01", "Dr. Martin's Watercolor dyes and Photoshop" ],
                                    ["<a href='#image-12'><img class='fade-in twelve' src='../img/portfolio/interstellaria/tradeCorpPosterThumb.jpg' alt='Trade Corp Poster' /></a>", "image-12", "<img src='../img/portfolio/interstellaria/tradeCorpPoster.jpg' alt='Trade Corp Poster'", "image-11", "image-1", "Trade Corp Poster", "Photoshop Illustration" ]                        
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
            
            <p>Additional images are located <strong><a href="https://pics.illyaking.com/index.php?/category/23" target="_blank">HERE</a></strong></p>

        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
