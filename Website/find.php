<?php
    session_start(); 
    $message = " "; 
    $msgToUser = "";
    if(isset($_POST['submit_button']))
    {
        $username = $_SESSION['id'];
        $Thepet = $_POST['pet'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $breed_dog = $_POST['breed_dog'];
        $breed_cat = $_POST['breed_cat'];
        $breed = ""; 
        $entries = array(); 
        $count = 0; 

        if($Thepet == 'cat')
        {
          $breed = $breed_cat;
        }
        else 
        {
            $breed = $breed_dog;
        }

        $myfile = fopen("database.txt", "r") or die ("Unable to open the text file");
        $allpets = file('database.txt',FILE_IGNORE_NEW_LINES); 
        foreach ($allpets as $pet)
        {
            //1:steven:dog:female:0-12months:Chihuahua
            list($rank2,$username2,$type2,$gender2,$age2,$breed2) = explode (':', $pet);
            if($Thepet==$type2 && $gender==$gender2 && $breed==$breed2 && $age==$age2)
            {
                echo "ello"; 
                $entry = "Pet : ".$type2."\t, Gender : ".$gender2."\t, Age : ".$breed."\t, Breed : ".$age2."\tfrom : ".$username2;
                $entries[$count] = $entry;
                $count++;
            }
        }

        fclose($myfile);
        $msgToUser = "";

        if(empty($entries))
        {
          $msgToUser = "No pet of your preference has been found, come back later"; 
        }
        else 
        {
            for($index = 0 ; $index < count($entries) ; $index++)
            {
              $msgToUser = $msgToUser.$entries[$index]."<br/>";
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
    <title>Find pets</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>


    <?php include "header.php" ?> 

    <?php include "nav-menu.html" ?> 

    <div id="content-area">
        <div id="find-form">
            <br>
            <p> Fill in this form to find your perfect pet! </p>

            <fieldset id="find">
                <legend id="title-find"><b> Find a pet</b></legend>
                <form onsubmit="findPet()" method = "post">
                    <br>
                    <label class="question"> Cat or dog ? : &nbsp;</label>
                    <label>Dog <input type="radio" name="pet" value="dog"></label>
                    <label>Cat <input type="radio" name="pet" value="cat"></label>
                    <br><br>
                    <label class="question">Breed of your Dog (if you are looking for a dog): &nbsp; </label>
                    <select id="dog-breed" name = "breed_dog">
                    <option value="none">Select</option>
                        <option value="Chihuahua"> Chihuahua</option>
                        <option value="Husky">Husky</option>
                        <option value="FrenchBulldog">French Bulldog</option>
                        <option value="goldenRetriever">Golden Retriever</option>
                        <option value="GermanSherpherd">German Shepherd</option>
                        <option value="Maltipoo">Maltipoo</option>
                        <option value="ShibaInu">Shiba Inu</option>
                        <option value="MixedBreed">Mixed Breed</option>
                        <option value="choseCat">I took cat</option>
                        <option value="other">Other</option>
                    </select>
                    <br><br>
                    <label class="question">Breed of your Cat (if you are looking for a cat): &nbsp; </label>
                    <select id="cat-breed" name = "breed_cat">
                        <option value="none">Select</option>
                        <option value="American">American Shorthair</option>
                        <option value="MaineCoon">Maine Coon</option>
                        <option value="Chartreux">Chartreux</option>
                        <option value="DevonRex">Devon Rex </option>
                        <option value="Sphynx">Sphynx</option>
                        <option value="Bengal">Bengal</option>
                        <option value="BritishShorthair">British Shorthair</option>
                        <option value="Munchkin">Munchkin </option>
                        <option value="MixedBreed">Mixed Breed</option>
                        <option value="choseDog">I took dog</option>
                        <option value="other">Other</option>
                    </select>
                    <br><br>
                    <label class="question">Prefered gender: &nbsp; </label>
                    <label>Female <input type="radio" name="gender" value="female"></label>
                    <label>Male <input type="radio" name="gender" value="male"></label>
                    <label>Does not matter <input type="radio" name="gender" value="none"></label>

                    <br><br>
                    <label class="question">Prefered age: &nbsp; </label>
                    <select id="age" name = "age">
                        <option value="none">Select</option>
                        <option value="0-12yo">0-12 months</option>
                        <option value="1-5yo">1-5 years old</option>
                        <option value="6-10yo">6-10 years old</option>
                        <option value="11-15yo">11-15 years old</option>
                        <option value="other">Other</option>
                    </select>
                    <br><br>
                    <label class="question">Does she/he needs to get along with other dogs, other cats or small children
                        ?
                    </label>
                    <label>Yes <input type="radio" name="along" value=""></label>
                    <label>No <input type="radio" name="along" value=""></label>
                    <label>Does not matter <input type="radio" name="along" value=""></label>

                    <p> Thank you for filling our form ! We will find you the perfect animal! </p>
                    <a href="https://www.flaticon.com/free-icon/animal_2913494"><img id="find-image"
                            src="images/find.png" alt="heart image"> </a>
                    <!-- This image is from https://www.flaticon.com/free-icon/animal_2913494-->


                    <input class="button" type="submit" value="Submit" name = "submit_button">
                    <input class="button" type="reset" value="Reset">
                    <h3><?php print($msgToUser)?></h3>

                </form>
            </fieldset>
        </div>
    </div>

    <?php include "footer.html" ?>
   
    <script src="code.js"></script>
</body>

</html>