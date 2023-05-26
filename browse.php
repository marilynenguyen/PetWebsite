<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Available Pets</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>


    <?php include "header.php" ?>

    <?php include "nav-menu.html" ?> 

    <div id="content-area">
        <div id="browse">
            <div id="pet1">
                <img class="browse-pets" src="images/pet1.jpg" alt="Dog">
                <!-- from :  https://www.rd.com/list/cutest-dog-breeds/ -->
                <ul id="info1">
                    <li>
                        Steven Lam
                    </li>
                    <li>
                        stevenlam3535@gmail.com
                    </li>
                    <li>
                        Dog
                    </li>
                    <li>
                        Golden Retriever
                    </li>
                    <li>
                        Male
                    </li>
                    <li>
                        Age: 2 years old
                    </li>
                    <li>
                        Get along with children
                    </li>
                    <li>
                        Golden Retriever with a big heart and a cheerful smile!

                    </li>
                </ul>
                <button> Interested!</button>
            </div>

            <div id="pet2">
                <img class="browse-pets" src="images/pet2.jpg" alt="Cat">
                <!-- from : https://living.greatpetcare.com/at-home/why-are-cats-so-cute/ -->
                <ul id="info2">
                    <li>
                        Doremon
                    </li>
                    <li>
                        doremon123@gmail.com
                    </li>
                    <li>
                        Cat
                    </li>
                    <li>
                        Siberian
                    </li>
                    <li>
                        Male
                    </li>
                    <li>
                        Age: 5 years old
                    </li>
                    <li>
                        Doesn't get along with children
                    </li>
                    <li>
                        Sweetest and calmest cat, he is very playful
                    </li>
                </ul>
                <button> Interested!</button>
            </div>

            <div id="pet3">
                <img class="browse-pets pet3" src="images/pet3.jpeg" alt="Dog">
                <!--from : https://www.salutbonjour.ca/2022/09/20/welsh-corgi--13-choses-a-savoir-sur-cette-race-de-chien
            -->
                <ul id="info3">
                    <li>
                        Christen Halaka
                    </li>
                    <li>
                        christenhalaka.com
                    </li>
                    <li>
                        Dog
                    </li>
                    <li>
                        Corgi
                    </li>
                    <li>
                        Female
                    </li>
                    <li>
                        Age: 6 years old
                    </li>
                    <li>
                        Gets along with everyone!
                    </li>
                    <li>
                        Little dog who is very energetic
                    </li>
                </ul>
                <button> Interested!</button>
            </div>
        </div>
    </div>


    <?php include "footer.html" ?>

    <script src="code.js"></script>

</body>

</html>