<?php 
    $msg = " "; 
    if(isset($_SESSION['id']))
    {
        $name = $_SESSION['id']; 
        $msg =  "<p style=\"color:#065465;\"> $name connected!</p>"; 
    }
    
?>

<header>
    <h1 id="title">
        <a href="home.php">
            <img id="logo" src="images/paws.png" alt="paws icon">
        </a>
        Adopt Pets
    </h1>
    <!-- The image logo comes from this website :  https://www.flaticon.com/free-icon/paws_3905601?term=paws&page=1&position=10&origin=search-->
    <p id="date"></p>
    <p id="time"></p>
    <p> <?php print($msg) ?></p>
</header>