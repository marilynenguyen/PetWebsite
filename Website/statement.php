<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Statement</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php include "header.php" ?>

    <div id="menu">
        <a href="home.php"> Home </a>
        <a href="log-in.php"> Log in/Sign up</a>
        <a href="browse.php"> Browse Available Pets </a>
        <a href="find.php"> Find a dog/cat </a>
        <a href="dog-care.php"> Dog Care </a>
        <a href="cat-care.php"> Cat Care </a>
        <a href="give.php"> Pet to give away </a>
        <a href="contact.php"> Contact Us </a>
    </div>

    <div id="content-area">
        <div id="statement">
            <br>
            <ol>
                <li>
                    All personal informations provided to Adopt Pets Website is
                    confidential. They are not going to be sold or misused.<br>
                </li>

                <li>
                    Every information is verified. Incorrect information posted by a pet
                    owner will be deleted.
                </li>
            </ol>

        </div>


    </div>


    <?php include "footer.html" ?>

    <script src="code.js"></script>
</body>



</html>