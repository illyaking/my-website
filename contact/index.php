<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Contact Illya King">
    <meta name="author" content="Illya King">
    <meta name="generator" content="Jekyll v4.1.1">

    <title>Contact &bull; IllyaKing.com</title>
    <link rel="icon" href="../img/kingLogoBlack.png" type="image/png" sizes="24x24">

    <!--CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/grid.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/form-validation.css">

    <script src="../js/form-validation.js"></script>

</head>

<body>
    <?php include '../includes/header.inc.php'; ?>
    <?php include '../includes/nav.inc.php'; ?>
    <main>
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/kingLogoBlack.png" alt="" width="150" height="150">
            </div>
            <!--/.py-5-->
            <form action="mail.php" method="POST" class="needs-validation" novalidate>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="John Smith" value="" required>
                    <div class="invalid-feedback">
                        Valid name is required.
                    </div>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div>
                    <label for="website">Website <span class="text-muted">(Optional)</span></label>
                    <input type="text" name="website" class="form-control" id="website" placeholder="https://exmaple.com" value="">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="mb-4">
                    <div class="form-group">
                        <p>Message</p>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
                    <input class="btn btn-secondary btn-s, btn-block" type="submit" value="Submit">
                </div>
            </form>
            <div>
                <p></p>
            </div>
        </div><!-- /.container -->
        <div>
            <p>&nbsp; &nbsp; &nbsp;</p>
        </div>
    </main><!-- /.main -->

    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
