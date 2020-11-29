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
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css" />
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
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/kingLogoBlack.png" alt="" width="150" height="150">
                <h2>Thank You</h2>
                <p class="lead">Your email has been sent. I will respond as soon as I can.</p>
            </div>
            <!--/.py-5-->
        </div><!-- /.container-->
        <div class="container">
            <?php
                $name = $_POST['name'];
                $website = $_POST['website'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $formcontent=" From: $name \n Website: $website \n Email: $email \n Message: $message";
                $recipient = "illyaking@illyaking.com";
                $subject = "Contact Form";
                $mailheader = "From: $email \r\n";
                mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
                echo "<a href='https://illyaking.com'> Return to Main Page</a>";
            ?>
            <?php 
                // if the url field is empty 
                if(isset($_POST['url']) && $_POST['url'] == ''){
                     // then send the form to your email
                          mail( 'illyaking@illyaking.com', 'Contact Form', print_r($_POST,true) ); 
                } 
                // otherwise, let the spammer think that they got their message through
            ?>
        </div><!-- /.container-->

    </main><!-- /.main -->
    <?php include '../includes/footer.inc.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
