<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Illya King's Sketchbook">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Sketchbook &bull; IllyaKing.com</title>
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
                                ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/sketchbook/momAndAbeulitaThumb.jpg' alt='Mom and Abeulita' /></a>", "image-1", "<img src='../img/portfolio/sketchbook/momAndAbeulita.jpg' alt='Mom and Abeulita'", "image-16", "image-2", "Mom and Abeulita", "Pencil on watercolor paper." ],
                                ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/sketchbook/flowersSketchThumb.jpg' alt='Flower Sketch' /></a>", "image-2", "<img src='../img/portfolio/sketchbook/flowersSketch.jpg' alt='Flower Sketch'", "image-1", "image-3", "Flower Sketch", "Pencil on paper." ],
                                ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/sketchbook/conanOnBeachThumb.jpg' alt='Conan on the Beach' /></a>", "image-3", "<img src='../img/portfolio/sketchbook/conanOnBeach.jpg' alt='Conan on the Beach'", "image-2", "image-4", "Conan on the Beach", "Inked in Bristol and scanned to color in Photoshop." ],
                                ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/sketchbook/nudeOneThumb.jpg' alt='Lingerie in Brush' /></a>", "image-4", "<img src='../img/portfolio/sketchbook/nudeOne.jpg' alt='Lingerie in Brush'", "image-3", "image-5", "Lingerie in Brush", "Brush and ink on Bristol." ],
                                ["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/sketchbook/motuCampsiteThumb.jpg' alt='He-Man, Teela, and Batlecat' /></a>", "image-5", "<img src='../img/portfolio/sketchbook/motuCampsite.jpg' alt='He-Man, Teela, and Batlecat'", "image-4", "image-6", "He-Man, Teela, and Batlecat", "Pigma Micron on Bristol. Color in Photoshop." ],
                                ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/sketchbook/trumpCowThumb.jpg' alt='Trump Cow' /></a>", "image-6", "<img src='../img/portfolio/sketchbook/trumpCow.jpg' alt='Trump Cow'", "image-5", "image-7", "Trump Cow", "Pencil on paper." ],
                                ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/sketchbook/horseForLexyThumb.jpg' alt='Horse for Lexy' /></a>", "image-7", "<img src='../img/portfolio/sketchbook/horseForLexy.jpg' alt='Horse for Lexy'", "image-6", "image-8", "Horse for Lexy", "Ink and Brush on Bristol." ],
                                ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/sketchbook/iMummyThumb.jpg' alt='I, Mummy Card' /></a>", "image-8", "<img src='../img/portfolio/sketchbook/iMummy.jpg' alt='I, Mummy Card'", "image-7", "image-9", "I, Mummy Card", "Pencil on paper. Frame in Photoshop." ],
                                ["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/sketchbook/batGirlThumb.jpg' alt='Batgirl' /></a>", "image-9", "<img src='../img/portfolio/sketchbook/batGirl.jpg' alt='Batgirl'", "image-8", "image-10", "Batgirl", "Brush and Ink, and Pigma Micron on Bristol." ],
                                ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/sketchbook/spiderGwenThumb.jpg' alt='Spider-Gwen' /></a>", "image-10", "<img src='../img/portfolio/sketchbook/spiderGwen.jpg' alt='Spider-Gwen'", "image-9", "image-11", "Spider-Gwen", "Brush and Ink, and Pigma Micron on Bristol." ],
                                ["<a href='#image-11'><img class='fade-in eleven' src='../img/portfolio/sketchbook/theArrowThumb.jpg' alt='The Arrow' /></a>", "image-11", "<img src='../img/portfolio/sketchbook/theArrow.jpg' alt='The Arrow'", "image-10", "image-12", "The Arrow", "Brush and Ink, and Pigma Micron on Bristol." ],
                                ["<a href='#image-12'><img class='fade-in twelve' src='../img/portfolio/sketchbook/harleyQuinnThumb.jpg' alt='Harley Quinn' /></a>", "image-12", "<img src='../img/portfolio/sketchbook/harleyQuinn.jpg' alt='Harley Quinn'", "image-11", "image-1", "Harley Quinn", "Brush and Ink, and Pigma Micron on Bristol." ]                     
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

                <!-- / Gallery - END copying here -->
            </div>
            <!--/.row-->

            <p>Additional images are located <strong><a href="https://pics.illyaking.com/index.php?/category/27" target="_blank">HERE</a></strong></p>
        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
