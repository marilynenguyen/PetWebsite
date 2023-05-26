<?php
        session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Care</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php include "header.php" ?>

    <?php include "nav-menu.html" ?> 

    <div id="content-area">

        <div id="dog-care-section">
            <h1>How to take care of your dog</h1>

            <ul>
                <li>
                    Take time to train your dog
                </li>
                <li>
                    Make time for engaging playtime
                </li>
                <li>
                    Take your dog on daily walks
                </li>
                <li>
                    Clean up after your dog
                </li>
                <li>
                    Make sure your dog is groomed
                </li>
                <li>
                    Take your dog regularly at the veterinary
                </li>
                <li>
                    Take care of your dog dental care
                </li>
                <li>
                    Make sure your dog is identified (collar/pet-microchip)
                </li>
                <li>
                    <a href="https://www.petmd.com/dog/care/responsible-pet-owners-checklist-taking-care-pet">
                        and more !</a>
                </li>
            </ul>

            <!-- This text is from : https://www.petmd.com/dog/care/responsible-pet-owners-checklist-taking-care-pet-->
            <a
                href="https://www.flaticon.com/free-icon/dog_9134573?term=dog&page=1&position=24&origin=search&related_id=9134573">
                <img id="dog-image" src="images/dog.png" alt="dog-picture">
                <!-- this image is from : https://www.flaticon.com/free-icon/dog_9134573?term=dog&page=1&position=24&origin=search&related_id=9134573-->
            </a>

        </div>

    </div>

    <?php include "footer.html" ?>
    
    <script src="code.js"></script>
</body>

</html>