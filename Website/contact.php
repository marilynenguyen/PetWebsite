<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php include "header.php" ?>

    <?php include "nav-menu.html" ?>

    <div id="content-area">
        <div id="contacts">
            <h1>Contact Us !</h1>
            <p><b>Name : </b> Marilyne Nguyen</p>
            <p><b> Student ID </b>: 40228396</p>
            <p>
                <b>Email us at :</b>
                <a href="mailto:marilyne.nguyen@mail.concordia.ca">
                    marilyne.nguyen@mail.concordia.ca</a>
            </p>
        </div>
    </div>


   <?php include "footer.html" ?>
    <script src="code.js"></script>
</body>

</html>