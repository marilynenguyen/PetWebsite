<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include "header.php" ?>

  <?php include "nav-menu.html" ?> 

    <div id="content-area">
        <div id="homepage">
            <h1>Welcome to Adopt Pets !</h1>
            <p>
                This website will help you find the perfect partner! If you browse
                through our <strong>Browse Available Pets</strong>, you could see the
                available pets. In the <strong>Find a dog/cat </strong> section, you
                can fill a form and search a pet according to your preferences. Some
                other sections are also available to show you how you could take care
                of your pet. If ever you want to let your pet live elsewhere, our site
                also have <strong> Pet to give away </strong> section in which you could let someone adopt your lovely
                pet.
                <br>
                <br>
                If you have any questions, feel free to contact us!
            </p>
            <a
                href="https://www.flaticon.com/free-icon/pet-house_3047928?term=animals&page=2&position=53&origin=search&related_id=3047928">
                <img id="home-image" src="images/home.png" alt="shelter logo">
                <!--This image is from : https://www.flaticon.com/free-icon/pet-house_3047928?term=animals&page=2&position=53&origin=search&related_id=3047928-->
            </a>

            <br><br>
            <p>
                <a href="https://www.flaticon.com/free-icon/paws_3905601?term=paws&page=1&position=10&origin=search">
                    <b> Logo image source</b>
                </a>
            </p>
        </div>
    </div>


    <?php include "footer.html" ?>


    <script src="code.js"></script>
</body>

</html>