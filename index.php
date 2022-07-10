<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Illya King- Illustrator and Web Developer">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>IllyaKing.com</title>
    <link rel="icon" href="img/kingLogoBlack.png" type="image/png" sizes="24x24">

    <!--CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/filterize.css" type="text/css" />

</head>

<body>
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/nav.inc.php'; ?>

    <main>

        <div class="jumbotron">
            <div class="container statement">
                <div class="overlay">
                    <h2>Illya King</h2>
                    <p>Illustrator and Web Developer</p>
                </div>
            </div><!-- /.container -->
        </div><!-- jumbotron -->

        <div class="container-fluid">

            <h2 class="centerText">My Services</h2>
            <hr class="mb-4">
            <div class="row">
                <div class="col-md-4">
                    <h2>Web Design</h2>
                    <p>I am a front-end site coder. I specialize in developing websites using LESS, JavaScript, and HTML/CSS. My background in graphic design reinforces my knowledge of practical web development. </p>
                    <p><a class="btn btn-primary services" href="https://github.com/illyaking" role="button" target="_blank">View my repository &raquo;</a></p>
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <h2>Web Development</h2>
                    <p>I have experience with SQL through MySQL and Oracle. I can build basic database tables to generate content for websites.</p>
                    <p class="spaceIsGreat">&nbsp;</p>
                    <p class="spaceIsGreat">&nbsp;</p>
                    <p class="spaceIsGreat">&nbsp;</p>
                    <p class="spaceIsGreat">&nbsp;</p>
                    <p><a class="btn btn-primary services" href="projects.php" role="button">View my projects &raquo;</a></p>

                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <h2>Illustration</h2>
                    <p>I develop graphics and illustrations for both the web and for print. I have done design work for films and businesses. My preference for web graphics is Adobe Photoshop and Illustrator. In my free time I self-publish comics and web comics. </p>
                    <p><a class="btn btn-primary services" href="/portfolio/" role="button">View my portfolio &raquo;</a></p>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div> <!-- /container-fluid -->

        <div class="container-fluid contactInfo">
            <div class="row">
                <div class="col-lg-8">
                    <form action="contact/mail.php" method="POST" class="needs-validation" novalidate>
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="John Smith" value="" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>
                        <div>
                            <label for="email">E-Mail</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                            <div class="invalid-feedback">
                                Valid E-mail is required.
                            </div>
                        </div>
                        <div>
                            <label for="website">Website <span class="text-muted">(Optional)</span></label>
                            <input type="text" name="website" class="form-control" id="website" placeholder="https://example.com">
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="website">Message</label>
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="mb-4">
                            <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
                            <br>
                            <input class="btn btn-secondary btn-s, btn-block" type="submit" value="Submit" onclick="alert('Thank you! I will respond as soon as I can.')">
                        </div>
                    </form>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-4 contact">
                    <h2>Contact Information</h2>
                    <h3><i class="fas fa-envelope"></i> illyaking@illyaking.com</h3>
                    <h3><i class="fas fa-tablet-alt"></i> <a class="telephone" href="tel:1-360-443-9347">+360-443-9347</a></h3>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    </main><!-- /.main -->

    <?php include 'includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
