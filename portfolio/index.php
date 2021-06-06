<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Illya King's Portfolio">
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
    
</head>

<body>
    <?php include '../includes/header.inc.php'; ?>
    <?php include '../includes/nav.inc.php'; ?>
    <main>

        <div class="album py-5 bg-light">
            <div class="container-fluid">

                <div class="row">
                    
                    <?php 
                        $list = [
                            ["<a href='illustrations.php'><img src='../img/boxIllustrations.jpg' height='300' alt='Illustration Icon'></a>", "Illustrations"],
                            ["<a href='commissions.php'><img src='../img/boxCommissions.jpg' height='300' alt='Commissions Icon'></a>", "Commissions"],
                            ["<a href='photography.php'><img src='../img/boxPhotography.jpg' height='300' alt='Photography Icon'></a>", "Photography"],
                            ["<a href='comicwars.php'><img src='../img/boxComicWars.jpg' height='300' alt='Comic Wars Icon'></a>", "Comic Wars Card Game"],
                            ["<a href='comiccovers.php'><img src='../img/boxComicCovers.jpg' height='300' alt='Comic Covers Icon'></a>", "Comic Book Covers"],
                            ["<a href='interstellaria.php'><img src='../img/boxInterstellaria.jpg' height='300' alt='Interstellaria Icon'></a>", "Interstellaria Concept Art"],
                            ["<a href='pccDesign.php'><img src='../img/boxPCCDesign.jpg' height='300' alt='PCC Design Icon'></a>", "PCC Graphic Design Projects"],
                            ["<a href='sketchbook.php'><img src='../img/boxRoses.jpg' height='300' alt='Sketchbook Icon'></a>", "Sketchbook"],
                            ["<a href='ais.php'><img src='../img/boxAIS.jpg' height='300' alt='Art Instruction Schools Icon'></a>", "Art Instruction Schools"]
                            ];
                        foreach($list as $lists) {
                                echo "<div class='col-md-3'><div class='card mb-4 shadow-sm'>" . $lists[0] . 
                                     "<div class='card-body'><p class='card-text'>" . $lists[1] .
                                "</p></div></div></div>" ;
                            }
                    ?>
                    
                </div>

            </div>
        </div>

    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
