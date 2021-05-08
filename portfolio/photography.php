<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Photography by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Photography &bull; IllyaKing.com</title>
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
                                ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/photography/Chicken-Dish-Thumb.jpg' alt='Chicken Dish' /></a>", "image-1", "<img src='../img/portfolio/photography/Chicken-Dish.jpg' alt='Chicken Dish'", "image-16", "image-2", "Chicken Dish", "Assignment for Photography Class." ],
                                ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/photography/Clear-Water-Thumb.jpg' alt='Clear Water' /></a>", "image-2", "<img src='../img/portfolio/photography/Clear-Water.jpg' alt='Clear Water'", "image-1", "image-3", "Clear Water", "Assignment for Photography Class." ],
                                ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/photography/Grayscale-Water-Thumb.jpg' alt='Grayscale Water' /></a>", "image-3", "<img src='../img/portfolio/photography/Grayscale-Water.jpg' alt='Grayscale Water'", "image-2", "image-4", "Grayscale Water", "Assignment for Photography Class." ],
                                ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/photography/Meier-and-Frank-Thumb.jpg' alt='Abandoned Toy' /></a>", "image-4", "<img src='../img/portfolio/photography/Meier-and-Frank.jpg' alt='Abandoned Toy'", "image-3", "image-5", "Abandoned Toy", "Assignment for Photography Class." ],
                                ["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/photography/Merlin-Study-Thumb.jpg' alt='Merlin Study' /></a>", "image-5", "<img src='../img/portfolio/photography/Merlin-Study.jpg' alt='Merlin Study'", "image-4", "image-6", "A Study in Merlin", "Assignment for Photography Class." ],
                                ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/photography/Portland-at-Night-Thumb.jpg' alt='Portland at Night' /></a>", "image-6", "<img src='../img/portfolio/photography/Portland-at-Night.jpg' alt='Portland at Night'", "image-5", "image-7", "Portland at Night", "Assignment for Photography Class." ],
                                ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/photography/Portland-Paul-Thumb.jpg' alt='Portland Paul' /></a>", "image-7", "<img src='../img/portfolio/photography/Portland-Paul.jpg' alt='Portland Paul'", "image-6", "image-8", "Portland Paul", "Assignment for Photography Class." ],
                                ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/photography/Rainbow-Water-01-Thumb.jpg' alt='Rainbow Water' /></a>", "image-8", "<img src='../img/portfolio/photography/Rainbow-Water-01.jpg' alt='Rainbow Water'", "image-7", "image-9", "Rainbow Water", "Assignment for Photography Class." ],
                                ["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/photography/Rainbow-Water-02-Thumb.jpg' alt='Rainbow Water' /></a>", "image-9", "<img src='../img/portfolio/photography/Rainbow-Water-02.jpg' alt='Rainbow Water'", "image-8", "image-10", "Rainbow Water 02", "Assignment for Photography Class." ],
                                ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/photography/Rainbow-Water-03-Thumb.jpg' alt='Rainbow Water' /></a>", "image-10", "<img src='../img/portfolio/photography/Rainbow-Water-03.jpg' alt='Rainbow Water'", "image-9", "image-11", "Rainbow Water 03", "Assignment for Photography Class." ],
                                ["<a href='#image-11'><img class='fade-in eleven' src='../img/portfolio/photography/King-Final-06-Thumb.jpg' alt='Rainbow Door' /></a>", "image-11", "<img src='../img/portfolio/photography/King-Final-06.jpg' alt='Rainbow Door'", "image-10", "image-12", "Rainbow Door", "Assignment for Photography Class." ],
                                ["<a href='#image-12'><img class='fade-in twelve' src='../img/portfolio/photography/King-Final-07-Thumb.jpg' alt='Alleyway' /></a>", "image-12", "<img src='../img/portfolio/photography/King-Final-07.jpg' alt='Alleyway'", "image-11", "image-13", "Alleyway", "Assignment for Photography Class." ],                       
                                ["<a href='#image-12'><img class='fade-in thirteen' src='../img/portfolio/photography/King-Final-08-Thumb.jpg' alt='Lanterns' /></a>", "image-13", "<img src='../img/portfolio/photography/King-Final-08.jpg' alt='Lanterns'", "image-12", "image-14", "Lanterns", "Assignment for Photography Class." ], 
                                ["<a href='#image-12'><img class='fade-in fourteen' src='../img/portfolio/photography/King-Final-09-Thumb.jpg' alt='Saloon Sign' /></a>", "image-14", "<img src='../img/portfolio/photography/King-Final-09.jpg' alt='Saloon Sign'", "image-13", "image-15", "Saloon Sign", "Assignment for Photography Class." ],  
                                ["<a href='#image-12'><img class='fade-in fifteen' src='../img/portfolio/photography/King-Final-10-Thumb.jpg' alt='Sushi' /></a>", "image-15", "<img src='../img/portfolio/photography/King-Final-10.jpg' alt='Sushi'", "image-14", "image-16", "Sushi", "Assignment for Photography Class." ],  
                                ["<a href='#image-12'><img class='fade-in sixteen' src='../img/portfolio/photography/King-Final-11-Thumb.jpg' alt='The Academy' /></a>", "image-16", "<img src='../img/portfolio/photography/King-Final-11.jpg' alt='The Academy'", "image-15", "image-1", "The Academy", "Assignment for Photography Class." ]
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
            
            <p>Additional images are located <strong><a href="https://pics.illyaking.com/index.php?/category/50" target="_blank">HERE</a></strong></p>

        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
