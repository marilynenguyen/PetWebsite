<?php 

    /*Log-in procedure */
    session_start(); 

    $msgToUser = " ";
    

    if(isset($_POST['log-in']))
    {
        $username = $_POST['user-name'];
        $password = $_POST['password'];
        $found = false;
        $identification = array (); 

    if(isset($_SESSION['id']))
    {
        $msgToUser = "<p style=\"color:orange;\">Cannot log in, a session is already open. You must log out.</p>"; 
    }
    else
    {
        if(!empty($username) && !empty($password))
        {
          $usernameNoPattern = "/[^a-zA-Z0-9]/"; 
          $passwordHasLetters  = preg_match('/[a-zA-Z]/',$password);
          $passwordHasDigits   = preg_match('/\d/',$password);
  
  
          if ($passwordHasLetters==0 || $passwordHasDigits==0 || preg_match($usernameNoPattern,$username)==1 || preg_match($usernameNoPattern,$password)==1 || strlen($password)<4)
          {
              $msgToUser="<p style=\"color:orange;\">Your username or your password must respect these requirements:\nYour username must have letters (both upper or lower
              case) and digits only. \n Your password must contain more than 4 characters (letters and digits only) \n and have at least one letter 
              and at least one digit</p>";
          }
          else
          //Verify if the username-password pair exists in the system
          {
              $myfile = fopen('login.txt', 'r') or die('Unable to open file!');
              $lines = file('login.txt',FILE_IGNORE_NEW_LINES); 
             foreach ($lines as $users)
             {
               list($name,$pwd) = explode (':', $users);
                if($username == $name && $password == $pwd)
                {
                    $msgToUser = "<p style=\"color:green;\"> Succesfully log in! You can navigate the website now!</p>";                       
                    $_SESSION['id'] = $username; 
                    $found = true;

                } 
              }
              
  
              fclose($myfile);  
  
              if(!$found)
              {
                  //print error message
                  $msgToUser = "<p style=\"color:red;\">Cannot log in, you must entered the valid informations or sign up first.</p>"; 
              }
         
           }
          }
          else
          {
              $msgToUser = "<p style=\"color:red;\">Unable to sign up. You must fill everything. </p>";
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
    <title>Log in </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php include "header.php" ?>
  
<?php include "nav-menu.html" ?> 

    <div id="content-area">
        <div id="contacts">
            <fieldset id = "info">
                <legend id="title-info"><b> Log in ! </b></legend>
                <form method = "post" >
                    <br>
                    <label class="question"> Enter your username : </label>
                    <input type = "text" name = "user-name" size = "30"> 
                    <br> <br> 
                    <label class="question"> Enter your password : </label>
                    <input type = "password" name = "password" size = "30"> 
                    <br> <br> 
                    <input class="button" type="submit" value="Log In" name = "log-in">
                    <input class="button" type="reset" value="Clear">

                   <p>If you do no have an account click below to create one</p>
                   <a href = "sign-up.php"> Sign up !</a>

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