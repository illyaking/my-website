<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Artwork illustrated by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Portfolio &bull; IllyaKing.com</title>
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
                                ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/illustrations/swallowsNestCastleThumb.jpg' alt='Swallows Nest Castle' /></a>", "image-1", "<img src='../img/portfolio/illustrations/swallowsNestCastle.jpg' alt='Swallows Nest Castle'", "image-12", "image-2", "Swallows Nest Castle", "Watercolor and Pigma Micron on Bristol." ],
                                ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/illustrations/roosterThumb.jpg' alt='Colorful Rooster' /></a>", "image-2", "<img src='../img/portfolio/illustrations/rooster.jpg' alt='Colorful Rooster'", "image-1", "image-3", "Rooster Brick", "Rooster in acrylic. For a t-shirt design to sell on RedBubble." ],
                                ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/illustrations/unionStationThumb.jpg' alt='Union Station in Portland, OR' /></a>", "image-3", "<img src='../img/portfolio/illustrations/unionStation.jpg' alt='Union Station in Portland, OR'", "image-2", "image-4", "Union Station", "Pigma Micron on Bristol. Illustration for comic story." ],
                                ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/illustrations/theWhiteHouseThumb.jpg' alt='The White House' /></a>", "image-4", "<img src='../img/portfolio/illustrations/theWhiteHouse.jpg' alt='The White House'", "image-3", "image-5", "The White House", "Pigma Micron on Bristol. Illustration for comic story." ] 
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
                        <ul class="gallery-items">
                        <?php
                            $list = [
["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/illustrations/saltLakeTempleThumb.jpg' alt='Salt Lake City Temple' /></a>", "image-5", "<img src='../img/portfolio/illustrations/saltLakeTemple.jpg' alt='Salt Lake City Temple'", "image-4", "image-6", "Salt Lake City Temple", "Pigma Micron on Bristol. Illustration for comic story." ],
                                ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/illustrations/bagdadTheatreThumb.jpg' alt='The Bagdad Theatre in Portland, OR' /></a>", "image-6", "<img src='../img/portfolio/illustrations/bagdadTheatre.jpg' alt='The Bagdad Theatre in Portland, OR'", "image-5", "image-7", "The Bagdad Theatre", "Pigma Micron on Bristol. Illustration for comic story." ],
                                ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/illustrations/thirdAndGlisenThumb.jpg' alt='Building on Third and Glisan' /></a>", "image-7", "<img src='../img/portfolio/illustrations/thirdAndGlisen.jpg' alt='Building on Third and Glisan'", "image-6", "image-8", "Third and Glisan", "Pigma Micron on Bristol. Illustration for comic story." ],
                                ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/illustrations/vanitasSkullThumb.jpg' alt='Vanitas Skull' /></a>", "image-8", "<img src='../img/portfolio/illustrations/vanitasSkull.jpg' alt='Vanitas Skull'", "image-7", "image-9", "Vanitas Skull", "Pencil on burned wax paper. For photography project." ]
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
                        <ul class="gallery-items">
                        <?php
                            $list = [
["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/illustrations/oregonStateHospitalThumb.jpg' alt='Oregon State Hospital' /></a>", "image-9", "<img src='../img/portfolio/illustrations/oregonStateHospital.jpg' alt='Oregon State Hospital'", "image-8", "image-10", "Oregon State Hospital", "Pigma Micron on Bristol. Illustration for comic story." ],
                                ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/illustrations/portlandOregonThumb.jpg' alt='Portland, Oregon' /></a>", "image-10", "<img src='../img/portfolio/illustrations/portlandOregon.jpg' alt='Portland, Oregon'", "image-9", "image-11", "Portland, Oregon", "Pigma Micron on Bristol. Illustration for comic story." ],
                                ["<a href='#image-11'><img class='fade-in eleven' src='../img/portfolio/illustrations/elkStatueThumb.jpg' alt='Elk Statue' /></a>", "image-11", "<img src='../img/portfolio/illustrations/elkStatue.jpg' alt='Elk Statue'", "image-10", "image-12", "Elk Statue", "Pigma Micron on Bristol. Unsued comic cover.." ],
                                ["<a href='#image-12'><img class='fade-in twelve' src='../img/portfolio/illustrations/parkingGarageThumb.jpg' alt='Parking Garage' /></a>", "image-12", "<img src='../img/portfolio/illustrations/parkingGarage.jpg' alt='Parking Garage'", "image-11", "image-1", "Parking Garage", "Pigma Micron on Bristol. Illustration for comic story." ]                        
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
                    </div>
                    <!--/.gallery-->
                </div>
                <!--/.filterized-->

            </div>
            <!--/.row-->
            <!-- / Gallery - END copying here -->

            <p>Additional images are located <strong><a href="https://pics.illyaking.com/index.php?/category/51" target="_blank">HERE</a></strong></p>
        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
