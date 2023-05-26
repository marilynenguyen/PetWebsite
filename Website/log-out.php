
<?php
    session_start(); 

    $msgToUser = " "; 

    /*Log-out procedure */
    if(isset($_POST["log-out"]))
    {
        if(isset($_SESSION['id']))
        {
            $msgToUser = "<p style=\"color:green;\">You have successfully logged out!</p>";
            unset($_SESSION['id']); 
        }
        else
        {
            $msgToUser = "<h5 style=\"color:red;\">You cannot log out, you must connect or sign up first. </h5>";
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include "header.php" ?>
  
<?php include "nav-menu.html" ?> 

    <div id="content-area">
        <div id="contacts">
            <fieldset id = "info">
                <form method = "post" >
                    <label class="question" style = "color:purple"> Click here to log out ➜ </label>
                    
                    <input class="button" type="submit" value="Log out" name = "log-out">

                    <h5><?php print($msgToUser) ?> </h5>

                   <p>If you do no have an account click <a href = "sign-up.php"> here </a> register!</p>
                   <p>If you are not logged in, click <a href = "log-in.php">here </a> to login ! </p>
                 
                </form>
            </fieldset> 
            <p>

            </p>
            <p>

            </p>
        </div>
    </div>

<?php include "footer.html" ?>
<script src="code.js"></script>

</body>
</html>