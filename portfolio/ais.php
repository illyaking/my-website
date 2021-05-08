<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Art Instruction School assignements by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>AIS Illustrations &bull; IllyaKing.com</title>
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
                                ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/ais/aisBirdThumb.jpg' alt='Colorful Bird' /></a>", "image-1", "<img src='../img/portfolio/ais/aisBird.jpg' alt='Colorful Bird'", "image-12", "image-2", "Colorful Bird", "Bird in acrylic." ],
                                ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/ais/aisCatThumb.jpg' alt='Cat in pencil' /></a>", "image-2", "<img src='../img/portfolio/ais/aisCat.jpg' alt='Cat in pencil'", "image-1", "image-3", "Cat", "Pencil Illustration." ],
                                ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/ais/aisFlowersThumb.jpg' alt='Sun Flowers' /></a>", "image-3", "<img src='../img/portfolio/ais/aisFlowers.jpg' alt='Sun Flowers'", "image-2", "image-4", "Sun Flowers", "Pigma Micron on Bristol. Illustration for comic story." ],
                                ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/ais/aisFootballThumb.jpg' alt='Football Player' /></a>", "image-4", "<img src='../img/portfolio/ais/aisFootball.jpg' alt='Football Player'", "image-3", "image-5", "Football Player", "Illustration in acrylic." ],
                                ["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/ais/aisVanderwayThumb.jpg' alt='Grandma Vanderway' /></a>", "image-5", "<img src='../img/portfolio/ais/aisVanderway.jpg' alt='Grandma Vanderway'", "image-4", "image-6", "Grandma Vanderway", "Illustration in Pencil." ],
                                ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/ais/aisHouseThumb.jpg' alt='Blocky House' /></a>", "image-6", "<img src='../img/portfolio/ais/aisHouse.jpg' alt='Blocky House'", "image-5", "image-7", "Blocky House", "Acyrlic Graphic Design study." ],
                                ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/ais/aisAccidentThumb.jpg' alt='Accident Cartoon' /></a>", "image-7", "<img src='../img/portfolio/ais/aisAccident.jpg' alt='Accident Cartoon'", "image-6", "image-8", "Accident Cartoon", "Pigma Micron on paper." ],
                                ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/ais/aisBottlesThumb.jpg' alt='Bottles' /></a>", "image-8", "<img src='../img/portfolio/ais/aisBottles.jpg' alt='Bottles'", "image-7", "image-9", "Bottles", "Pigma Micron on Bristol." ],
                                ["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/ais/aisFarmHouseThumb.jpg' alt='Farm House' /></a>", "image-9", "<img src='../img/portfolio/ais/aisFarmHouse.jpg' alt='Farm House'", "image-8", "image-10", "Farm House", "Illustration in pencil." ],
                                ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/ais/aisGrandmotherThumb.jpg' alt='Grandmother' /></a>", "image-10", "<img src='../img/portfolio/ais/aisGrandmother.jpg' alt='Grandmother'", "image-9", "image-11", "Grandmother", "Illustration in Pigma Micron and Acyrlic." ],
                                ["<a href='#image-11'><img class='fade-in eleven' src='../img/portfolio/ais/aisPortraitThumb.jpg' alt='Portait of Girl' /></a>", "image-11", "<img src='../img/portfolio/ais/aisPortrait.jpg' alt='Portait of Girl'", "image-10", "image-12", "Portait of Girl", "Illustration in pencil." ],
                                ["<a href='#image-12'><img class='fade-in twelve' src='../img/portfolio/ais/aisShoeThumb.jpg' alt='Shoe' /></a>", "image-12", "<img src='../img/portfolio/ais/aisShoe.jpg' alt='Shoe'", "image-11", "image-1", "Shoe", "Illustration in pencil." ]                        
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

            <p>Additional images are located <strong><a href="https://pics.illyaking.com/index.php?/category/15" target="_blank">HERE</a></strong></p>

        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
