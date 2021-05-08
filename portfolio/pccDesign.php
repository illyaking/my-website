<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Graphic Design projects for Portland Community College by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>PCC Graphic Design &bull; IllyaKing.com</title>
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
                                ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/pccDesign/energyThumb.jpg' alt='Energy' /></a>", "image-1", "<img src='../img/portfolio/pccDesign/energy.jpg' alt='Energy'", "image-16", "image-2", "Energy", "Art 140A Photography: Abstract" ],
                                ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/pccDesign/bikeRidingThumb.jpg' alt='Bike Riding' /></a>", "image-2", "<img src='../img/portfolio/pccDesign/bikeRiding.jpg' alt='Bike Riding'", "image-1", "image-3", "Bike Riding", "Art 140A Photography: Abstract" ],
                                ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/pccDesign/theMatrixThumb.jpg' alt='The Matrix' /></a>", "image-3", "<img src='../img/portfolio/pccDesign/theMatrix.jpg' alt='The Matrix'", "image-2", "image-4", "The Matrix", "Art 140A Photography: Abstract" ],
                                ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/pccDesign/cityBlockThumb.jpg' alt='City Block' /></a>", "image-4", "<img src='../img/portfolio/pccDesign/cityBlock.jpg' alt='City Block'", "image-3", "image-5", "City Block", "CAS233 Beginning Illustrator" ],
                                ["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/pccDesign/astoriaIllustratorThumb.jpg' alt='Astoria, OR' /></a>", "image-5", "<img src='../img/portfolio/pccDesign/astoriaIllustrator.jpg' alt='Astoria, OR'", "image-4", "image-6", "Astoria, OR", "CAS233 Beginning Illustrator" ],
                                ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/pccDesign/bananasIllustratorThumb.jpg' alt='Bananas Diagram' /></a>", "image-6", "<img src='../img/portfolio/pccDesign/bananasIllustrator.jpg' alt='Bananas Diagram'", "image-5", "image-7", "Bananas Diagram", "CAS233 Beginning Illustrator" ],
                                ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/pccDesign/owlsIllustratorThumb.jpg' alt='Owls' /></a>", "image-7", "<img src='../img/portfolio/pccDesign/owlsIllustrator.jpg' alt='Owls'", "image-6", "image-8", "Owls", "CAS233 Beginning Illustrator" ],
                                ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/pccDesign/moduleResampledThumb.jpg' alt='Digital Touchup' /></a>", "image-8", "<img src='../img/portfolio/pccDesign/moduleResampled.jpg' alt='Digital Touchup'", "image-7", "image-9", "Digital Touchup", "CAS118 Beginning Photoshop" ],
                                ["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/pccDesign/manipPhotoshopThumb.jpg' alt='Digital Manipulation' /></a>", "image-9", "<img src='../img/portfolio/pccDesign/manipPhotoshop.jpg' alt='Digital Manipulation'", "image-8", "image-10", "Digital Manipulation", "CAS118 Beginning Photoshop" ],
                                ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/pccDesign/skyLineThumb.jpg' alt='Seattle Skyline' /></a>", "image-10", "<img src='../img/portfolio/pccDesign/skyLine.jpg' alt='Seattle Skyline'", "image-9", "image-11", "Seattle Skyline", "CAS118 Beginning Photoshop" ],
                                ["<a href='#image-11'><img class='fade-in eleven' src='../img/portfolio/pccDesign/bwBrideThumb.jpg' alt='B&W Bride' /></a>", "image-11", "<img src='../img/portfolio/pccDesign/bwBride.jpg' alt='B&W Bride'", "image-10", "image-12", "B&W Bride", "CAS118 Beginning Photoshop" ],
                                ["<a href='#image-12'><img class='fade-in twelve' src='../img/portfolio/pccDesign/iqBrushThumb.jpg' alt='IQ Brush' /></a>", "image-12", "<img src='../img/portfolio/pccDesign/iqBrush.jpg' alt='IQ Brush'", "image-11", "image-1", "IQ Brush", "Logo for WR227 Technical/Profession WR 1 project" ]                     
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
            <p>Additional images are located <strong><a href="https://pics.illyaking.com/index.php?/category/24" target="_blank">HERE</a></strong></p>
        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
