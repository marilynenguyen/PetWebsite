<?php

    session_start(); 
    $msgToUser = " ";

    if(isset($_SESSION['id']))
    {
        $msgToUser = "<p style=\"color:orange;\">Cannot sign in, a session is already open. You must log out.</p>"; 

    }
    else
    {
    /*Sign-up procedure */
    if(isset($_POST["sign-up"]))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $found = false;
      $identification = array (); 

      if(!empty($username) && !empty($password))
      {
        $usernameNoPattern = "/[^a-zA-Z0-9]/"; 
        $passwordHasLetters  = preg_match('/[a-zA-Z]/',$password);
        $passwordHasDigits   = preg_match('/\d/',$password);

        //Must respect the requirements 
        if ($passwordHasLetters==0 || $passwordHasDigits==0 || preg_match($usernameNoPattern,$username)==1 || preg_match($usernameNoPattern,$password)==1 || strlen($password)<4)
        {
            $msgToUser="<p style=\"color:orange;\">Your username or your password must respect these requirements:\nYour username must have letters (both upper or lower
            case) and digits only. \n Your password must contain more than 4 characters (letters and digits only) \n and have at least one letter 
            and at least one digit</p>";
        }
        else
        //Verify if the username-password pair exists in the system
        //Cannot have duplicates 
        {
            $myfile = fopen('login.txt', 'r') or die('Unable to open file!');

            while(!feof($myfile))
            {
                $line = fgets($myfile); 
                $identification = explode (':', $line); 

                if($username == $identification[0])
                {
                    $msgToUser = "<p style=\"color:red;\">The username you chose already exist. Please try a other one</p>";
                    //found is initialized to true, meaning the username already exists 
                    $found = true;
                }
            }
            fclose($myfile);  
            //if the username does not exist, we crerate a new entry in the system
            if(!$found)
            {
                //print welcome message 
                $msgToUser = "Welcome! You are now registered. Click <a href=\"log-in.php\">here</a> to log in.";
                //so we open the same file but in append mode(a) and write his information on the right format
                $myfile = fopen("login.txt", "a") or die("We were unable to open file, please try again!");
                fwrite($myfile,"\n".$username.":".$password);
                fclose($myfile);
            }
       
        }
      }
      else
      {
        $msgToUser = "<p style=\"color:red;\">Cannot sign up, you must fill all the fields.</p>"; 
      }
    }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include "header.php" ?>
  
<?php include "nav-menu.html" ?> 

    <div id="content-area">
        <div id="contacts">
            <fieldset id = "info">
                <legend id="title-info"><b> Create an account</b></legend>
                <form method = "post" >
                    <br>
                    <label class="question"> Enter your username : </label>
                    <input type = "text" name = "username" size = "30"> 
                    <br> <br> 
                    <label class="question"> Enter your password : </label>
                    <input type = "password" name = "password" size = "30"> 
                    <br> <br> 
                    <input class="button" type="submit" value="Sign Up" name = "sign-up">
                    <input class="button" type="reset" value="Clear">

                    <h5> <?php print($msgToUser) ?> </h5>

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