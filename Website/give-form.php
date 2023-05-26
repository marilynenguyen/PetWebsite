<div id="give-form">
            <br>
            <p> Fill in this form to find a new home for your pet </p>
            <fieldset id="info">
                <legend id="title-info"><b> Informations of your pet </b></legend>
                <form id="give" onsubmit="giveForm()" method ="post">
                    <br>
                    <label class="question"> Cat or dog ? : &nbsp;</label>
                    <label>Dog <input type="radio" name="pet" value="dog"></label>
                    <label>Cat <input type="radio" name="pet" value="cat"></label>
                    <br><br>
                    <label class="question">Breed of your Dog (if it is a dog): &nbsp; </label>
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
                    <label class="question">Breed of your Cat (if it is a cat): &nbsp; </label>
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
                    <label class="question">Gender: &nbsp; </label>
                    <label>Female <input type="radio" name="gender" value="female"></label>
                    <label>Male <input type="radio" name="gender" value="male"></label>
                    <br><br>
                    <label class="question">Age: &nbsp; </label>
                    <select id="age" name = "age">
                        <option value="none">Select</option>
                        <option value="0-12yo">0-12 months</option>
                        <option value="1-5yo">1-5 years old</option>
                        <option value="6-10yo">6-10 years old</option>
                        <option value="11-15yo">11-15 years old</option>
                        <option value="other">Other</option>
                    </select>
                    <br><br>
                    <label class="question">Does she/he needs to get along with</label><br>
                    <label class="question"> &nbsp; &nbsp; - With cats ?</label>
                    <label>&nbsp; &nbsp;&nbsp;Yes <input type="radio" class="along" name="along1" value="yescats"></label>
                    <label>No <input type="radio" class="along" name="along1" value="nocats"></label>
                    <label>&nbsp;Does not matter <input type="radio" class="along" name="along1" value="none"></label>

                    <br>

                    <label class="question"> &nbsp; &nbsp; - With dogs ?</label>
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes <input type="radio" class = "along" name="along2" value="yesdogs"></label>
                    <label>&nbsp;No <input type="radio" class="along" name="along2" value="nodogs"></label>
                    <label>&nbsp;Does not matter <input type="radio" class="along" name="along2" value="none"></label>

                    <br>

                    <label class="question"> &nbsp; &nbsp; - With small children ?</label>
                    <label>Yes <input type="radio" class="along" name="along3" value="nochild"></label>
                    <label>&nbsp;No <input type="radio" class="along" name="along3" value="yeschild"></label>
                    <label>&nbsp;Does not matter <input type="radio" class = "along" name="along3" value="none"></label>
                    <br><br>

                    <label class="question"> Please provide some detail informations about your pet :
                    </label>
                    <br>
                    <textarea name="description" rows="7" cols="70"></textarea>

                    <br><br>
                    <label class="question" > Current owner's name: </label>
                    <input name="name" type="text">
                    <br><br>
                    <label class="question"> Current owner's family name : </label>
                    <input name="fname" type="text">
                    <br><br>
                    <label class="question"> Your email: &nbsp; </label>
                    <input name="email" type="text">
                    <br><br>
                    <p> Thank you for filling our form ! We will find you the perfect home for your animal! </p>
                    <a
                        href="https://www.flaticon.com/free-icon/pet-shelter_2842850?term=animal+house&page=1&position=18&origin=search&related_id=2842850"><img
                            id="give-image" src="images/give.png" alt="little image of shelter"></a>
                    <!-- This image is from : https://www.flaticon.com/free-icon/pet-shelter_2842850?term=animal+house&page=1&position=18&origin=search&related_id=2842850-->
                    <input class="button" type="submit" value="Submit" name = "submit_button">
                    <input class="button" type="reset" value="Clear">
                </form>
            </fieldset>
 </div>
