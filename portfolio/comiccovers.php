<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Comic Book Covers by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Comic Covers &bull; IllyaKing.com</title>
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
                                ["<a href='#image-1'><img class='fade-in one' src='../img/portfolio/comiccovers/TheSchlubCoverBook04Thumb.jpg' alt='Cover to The Schlub Book 04' /></a>", "image-1", "<img src='../img/portfolio/comiccovers/TheSchlubBook04.jpg' alt='Cover to The Schlub Book 04'", "image-12", "image-2", "Cover to The Schlub Book 04", "Watercolor dyes and ink on Bristol." ],
                                ["<a href='#image-2'><img class='fade-in two' src='../img/portfolio/comiccovers/ManManCoverThumb.jpg' alt='Cover to Man-Man the Barbarian' /></a>", "image-2", "<img src='../img/portfolio/comiccovers/ManManCover.jpg' alt='Cover to Man-Man the Barbarian'", "image-1", "image-3", "Cover to Man-Man the Barbarian", "Watercolor dyes and ink on Bristol." ],
                                ["<a href='#image-3'><img class='fade-in three' src='../img/portfolio/comiccovers/coverZetaman02Thumb.jpg' alt='Cover to Zetaman 02' /></a>", "image-3", "<img src='../img/portfolio/comiccovers/coverZetaman02.jpg' alt='Cover to Zetaman 02'", "image-2", "image-4", "Cover to Zetaman 02", "Watercolor dyes, brush and ink on Bristol." ],
                                ["<a href='#image-4'><img class='fade-in four' src='../img/portfolio/comiccovers/coverIssue11Thumb.jpg' alt='Cover to Naked Man Comics #11' /></a>", "image-4", "<img src='../img/portfolio/comiccovers/coverIssue11.jpg' alt='Cover to Naked Man Comics #11'", "image-3", "image-5", "Cover to Naked Man Comics #11", "Ink and Brush on Bristol. Colored in Photoshop." ],
                                ["<a href='#image-5'><img class='fade-in five' src='../img/portfolio/comiccovers/coverIssue10Thumb.jpg' alt='Cover to Naked Man Comics #10' /></a>", "image-5", "<img src='../img/portfolio/comiccovers/coverIssue10.jpg' alt='Cover to Naked Man Comics #10", "image-4", "image-6", "Cover to Naked Man Comics #10", "Brush and ink on Bristol. Colors in Photoshop." ],
                                ["<a href='#image-6'><img class='fade-in six' src='../img/portfolio/comiccovers/coverShinsukeAlternateThumb.jpg' alt='Alternate cover to Shinsuke Takahashi' /></a>", "image-6", "<img src='../img/portfolio/comiccovers/coverShinsukeAlternate.jpg' alt='Alternate cover to Shinsuke Takahashi'", "image-5", "image-7", "Alternate cover to Shinsuke Takahashi", "Brush and ink, Pigma Micron on Bristol." ],
                                ["<a href='#image-7'><img class='fade-in seven' src='../img/portfolio/comiccovers/coverWebcomicThumb.jpg' alt='Cover to Webcomic Trade' /></a>", "image-7", "<img src='../img/portfolio/comiccovers/coverWebcomic.jpg' alt='Cover to Webcomic Trade'", "image-6", "image-8", "Unused cover for Webcomic Trade", "Brush and ink on Bristol. Coloring in Photoshop." ],
                                ["<a href='#image-8'><img class='fade-in eight' src='../img/portfolio/comiccovers/coverTotesTradeThumb.jpg' alt='Cover to Trade' /></a>", "image-8", "<img src='../img/portfolio/comiccovers/coverTotesTrade.jpg' alt='Cover to Trade'", "image-7", "image-9", "Naked and the City Trade Paperback", "Brush and ink on Bristol. Coloring in Photoshop." ],
                                ["<a href='#image-9'><img class='fade-in nine' src='../img/portfolio/comiccovers/coverWynonnaWhiskeyThumb.jpg' alt='Cover to Wynonna Whiskey' /></a>", "image-9", "<img src='../img/portfolio/comiccovers/coverWynonnaWhiskey.jpg' alt='Cover to Wynonna Whiskey'", "image-8", "image-10", "Cover to Wynonna Whiskey", "Watercolor dyes on Bristol." ],
                                ["<a href='#image-10'><img class='fade-in ten' src='../img/portfolio/comiccovers/coverHollyWoodThumb.jpg' alt='Holly Wood Cover' /></a>", "image-10", "<img src='../img/portfolio/comiccovers/coverHollyWood.jpg' alt='Holly Wood Cover'", "image-9", "image-11", "Holly Wood Cover", "Watercolor Dyes on Bristol." ],
                                ["<a href='#image-11'><img class='fade-in ten' src='../img/portfolio/comiccovers/schlubCoverThumb.jpg' alt='The Schlub Cover' /></a>", "image-11", "<img src='../img/portfolio/comiccovers/schlubCover.jpg' alt='The Schlub Cover'", "image-10", "image-12", "The Schlub Cover", "Pen on Bristol." ],
                                ["<a href='#image-12'><img class='fade-in ten' src='../img/portfolio/comiccovers/coverIssueNineThumb.jpg' alt='Cover to Naked Man Comics #9' /></a>", "image-12", "<img src='../img/portfolio/comiccovers/coverIssueNine.jpg' alt='Cover to Naked Man Comics #9'", "image-11", "image-1", "Cover to to Naked Man Comics #9", "Pen on Bristol, Coloring in Photoshop." ]
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
                <!--/.filterize-->

            </div>
            <!--/.row-->

            <!-- / Gallery - END copying here -->

        </div><!-- /.container-fluid-->
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
