<?php
    session_start(); 
    $message = " "; 
    if(isset($_POST['submit_button']))
    {
        $username = $_SESSION['id'];
        $pet = $_POST['pet'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $breed_dog = $_POST['breed_dog'];
        $breed_cat = $_POST['breed_cat'];
        $breed = ""; 
      
        if($pet == 'dog')
        {
          $breed = $breed_dog;
        }
        else 
        {
          $breed = $breed_cat;
        }

        $myfile = fopen("database.txt", "a") or die ("Unable to open the text file");
        $numLines = count(file("database.txt")); 
        $data = ($numLines+1).":".$username.":".$pet.":".$gender.":".$age.":". $breed."\n";
        fwrite($myfile, $data);
        fclose($myfile);
        $message = "Thank you for submitting your animal's informations"; 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give your pet for adoption</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include "header.php" ?>
<?php include "nav-menu.html" ?> 

    <div id="content-area">
    <?php
        // Check if a session is already open
        if(isset($_SESSION['id'])) 
        {
          include "give-form.php";
          
        } 
        // Redirect the user to the login page
        else 
        {
          header("location:log-in.php");
        }
      ?>
    </div>

    <?php include "footer.html" ?>
    
    <script src="code.js"></script>
</body>


</html>