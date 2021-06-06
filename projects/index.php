<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Coding projects by Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Projects &bull; IllyaKing.com</title>
    <link rel="icon" href="../img/kingLogoBlack.png" type="image/png" sizes="24x24">

    <!--CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/grid.css" />
    <link rel="stylesheet" href="../css/style.css" />
    
    <style>
        h3 {
            margin-bottom: 5px;
        }
        .card {
            overflow: hidden;
        }
        
        @media screen and (min-width: 900px) {
            .card {
                height: 900px;
              }
              
            .btn-group {
                position: absolute;
                bottom: 0;
                padding-bottom: 15px;
            }
        }
        
        @media screen and (min-width: 1200px) {
            .card {
                height: 800px;
              }
              
        }
        
        @media screen and (min-width: 1800px) {
              .card {
                height: 600px;
              }
        }

    </style>

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
                            ["https://pcc.illyaking.com/cis195p/video_poker/' target='_blank'><img src='../img/boxVideoPoker.jpg' height='300' alt='Icon for Video Poker", "Video Poker", "Portland Community College CIS 195P Spring", "The project gets data from the user and passes that data to one or more secondary pages using POST method.", "https://pcc.illyaking.com/cis195p/video_poker/", "https://github.com/illyaking/pcc-cis195p-videopoker"],
                            ["https://pcc.illyaking.com/cis195p/baby_names/' target='_blank'><img src='../img/boxBabyNames.jpg' height='300' alt='Icon for Baby Calculator", "Popular Baby Names", "Portland Community College CIS 195p Spring 2021", "A PHP website to gather data from txt files and create a table from the information.", "https://pcc.illyaking.com/cis195p/baby_names/", "https://github.com/illyaking/pcc-cis195p-babynames"],
                            ["https://pcc.illyaking.com/cis133w/week9/15.html' target='_blank'><img src='../img/boxPuzzle.jpg' height='300' alt='Icon for 15 Puzzle Demo", "jQuery Puzzle", "Portland Community College Fall 2020", "Students needed to build a 15 number puzzle. The program must select HTML Elements, manipulate the DOM, respond to events, and alter CSS Properties. document.getElementById, ElementsByTagName, ElementsByClassName, addEventListener were not allowed.", "https://pcc.illyaking.com/cis133w/week9/15.html", "https://github.com/illyaking/pcc-cis133w-15-Puzzle"],
                            ["https://pcc.illyaking.com/cas222/' target='_blank'><img src='../img/boxAITHProject.jpg' height='300' alt='Icon for Ace in the Hole Demo", "Ace in the Hole Multisports Event", "Portland Community College CAS 222 Spring 2020", "The project required students to build a mobile responsive website. The site needed registration and contact forms that stored data in a database. The website needed to follow CSS3 and HTML5 standards. The website must contain an image gallery, a FAQ section, and social media widgets.", "https://pcc.illyaking.com/cas222/template/", "https://github.com/illyaking/pcc-cas222-aceinthehole"],
                            ["https://pcc.illyaking.com/cas242/project/' target='_blank'><img src='../img/boxBurritoMasala.jpg' height='300' alt='Icon for Burrito Masala Demo", "Burrito Masala", "Portland Community College CAS 242 Spring 2020", "Project required students to build a one-page mobile responsive website. The client was a local food cart in Portland, Oregon. Students needed to create a SWAT analysis, a brand book, a user journey, and persona templates.", "https://pcc.illyaking.com/cas242/project/", "https://github.com/illyaking/pcc-cas242-burritomasala"],
                            ["https://pcc.illyaking.com/cas225/pht/' target='_blank'><img src='../img/boxPortlandHistoricalTours.jpg' height='300' alt='Icon for Portland Historical Tours Demo", "Portland Historical Tours", "Portland Community College CAS 225 Winter 2020", "Students needed to build a website that generated pages using SQL. The project needed a database that contained reservation and contact information. The contact form also generated an email to the user.", "https://pcc.illyaking.com/cas225/pht/", "https://github.com/illyaking/pcc-cas225-finalPortlandHistoricalTours"],
                            ["https://projects.illyaking.com/mobileComments2.0/' target='_blank'><img src='../img/boxMobileCommenter.jpg' height='300' alt='Icon for Mobile Commenter", "Mobile Commenter Program", "FedEx Freight December 2018", "A jQuery comment generator for Freight Analysis. The generator assisted in building reports for FedEx Freight.", "https://projects.illyaking.com/mobileComments2.0/", "https://github.com/illyaking/mobileComments2.0"],
                            ["https://projects.illyaking.com/ITEM680calculator/item680.html' target='_blank'><img src='../img/boxItem680.jpg' height='300' alt='Icon for Item 680 Calculator", "Item 680 Calculator", "FedEx Freight December 2018", "jQuery calculator for NMFTA item rule 680. The calculator determined if a commodity was less than 65% of it’s container. It also calculated the stability of the commodity per ITEM 680 Note 2 section C.", "https://projects.illyaking.com/ITEM680calculator/item680.html", "https://github.com/illyaking/item680calculator"],
                            ["https://mytheme.illyaking.com/' target='_blank'><img src='../img/boxWPTheme.jpg' height='300' alt='Icon for WordPress Theme Demo", "Theme for WordPress", "Portland Community College CAS 111w Spring 2018", "Students needed to build a WordPress theme that is mobile responsive. The site modifies the standard customization menu through functions.php file. The project required coders to create custom pages for Woocommerce. Students also built a simple address plugin.", "https://mytheme.illyaking.com/", "https://github.com/illyaking/pcc-cas211w-mytheme"],
                            ["https://pcc.illyaking.com/cas215/assignment10/final/' target='_blank'><img src='../img/boxLionsKingJungle.jpg' height='300' alt='Icon for Lion Website", "Lions- King of the Jungle", "Portland Community College CAS 215 Fall 2018", "The project required students to build a website using LESS/Mixins. The website must be responsive first. The menu uses the jQuery Hamburger script. The header and the background changed when the display size changed.", "https://pcc.illyaking.com/cas215/assignment10/final/", "https://github.com/illyaking/pcc-cas215-finalWebsite"],
                            ["https://pcc.illyaking.com/cas213/week8/week8.html' target='_blank'><img src='../img/boxJQueryGallery.jpg' height='300' alt='Icon for jQuery Gallery Demo", "jQuery Photo Gallery and Menu", "Portland Community College CAS 213 Fall 2018", "Using jQuery, students needed to build a gallery with a responsive menu.", "https://pcc.illyaking.com/cas213/week8/week8.html", "https://github.com/illyaking/pcc-cas213-jQueryGallery"],
                            ["https://pcc.illyaking.com/cas206/project/index.html' target='_blank'><img src='../img/boxPortlandHistoricalTours206.jpg' height='300' alt='Icon for CSS Webpage Demo", "Portland Historical Tours", "Portland Community College CAS 206 Summer 2018", "Final for Principles of HTML and CSS. Students needed to build a responsive website. Portland Historical Tours content provided by class.", "https://pcc.illyaking.com/cas206/project/index.html", "https://github.com/illyaking/pcc-cas206-finalPortlandHistoricalToursSite"]
                            ];
                        foreach($list as $lists) {
                                echo "<div class='col-md-3'><div class='card mb-4 shadow-sm'><a rel='external' href='" . $lists[0] . 
                                    "'></a><div class='card-body'><h3>" . $lists[1] .
                                    "</h3><h4>" . $lists[2] . 
                                    "</h4><p class='card-text'>" . $lists[3] .
                                "</p><div class='d-flex justify-content-between align-items-center'><div class='btn-group'>
                                <a rel='external' class='btn btn-lg btn-outline-secondary' href='" . $lists[4] .
                                "' target='_blank'>View</a>&nbsp;<a rel='external' class='btn btn-lg btn-outline-secondary' href='" . $lists[5] .
                                "' target='_blank'>GitHub</a></div></div></div></div></div>" ;
                            }
                    ?>

                </div><!-- /.row -->
                <p>Additional projects are on GitHub at <strong><a href="https://github.com/illyaking" target="_blank">https://github.com/illyaking</a></strong></p>
            </div><!-- /.container-fluid -->
        </div><!-- /.album -->
        

    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
