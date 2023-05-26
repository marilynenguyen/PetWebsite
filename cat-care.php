<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Care</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include "header.php" ?>
<?php include "nav-menu.html" ?> 

    <div id="content-area">
        <div id="cat-care-section">
            <h1>How to take care of a cat</h1>
            <ul>
                <li>
                    Train your cat to use the litter
                </li>
                <li>
                    Create a comfortable litter place
                </li>
                <li>
                    Create a place where your cat can scratch
                </li>
                <li>
                    Brush your cat according to its needs
                </li>
                <li>
                    Take your cat regularly at the veterinary
                </li>
                <li>
                    Take care of its dental hygiene
                </li>
                <li>
                    Take some time to play with your cat
                </li>
                <li>
                    <a href="https://www.wikihow.pet/Take-Care-of-a-Cat"> and more !</a>
                </li>
            </ul>
            <!--Text and information comes from : https://www.wikihow.pet/Take-Care-of-a-Cat-->
            <a
                href="https://www.flaticon.com/free-icon/happy_1818405?term=cat&page=1&position=26&origin=tag&related_id=1818405">
                <img src="images/cat.png" id="cat-image" alt="cat picture">
                <!--This image is from : https://www.flaticon.com/free-icon/happy_1818405?term=cat&page=1&position=26&origin=tag&related_id=1818405-->
            </a>
        </div>
    </div>


    <?php include "footer.html" ?>

    <script src="code.js"></script>
</body>

</html>