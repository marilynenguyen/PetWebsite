

function getCurrentDate(){

    let today = new Date(); 
    let day_num = today.getDate(); 
    let months = ["January", "Febuary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]; 
    let weekday = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"]; 
    let month = months[today.getMonth()]; 
    let day = weekday[today.getMonth()]; 
    let year = today.getFullYear(); 
    
    return day + ", "+ month + " " +  day_num + ", " + year;
}

function getCurrentTime(){

    let time = new Date(); 
    document.getElementById("time").innerHTML = time.toLocaleTimeString(); 
}

setInterval(getCurrentTime,1000); 
document.getElementById("date").innerHTML = getCurrentDate();


function giveForm()
{
    var animalInput = document.getElementsByName("pet");
    var counterAnimal = 0;
    for(var index = 0 ; index < animalInput.length ; index++) 
    {
        if(animalInput[index].checked)
        {
            counterAnimal++;
            break;
        }
    }
    if(counterAnimal == 0) {
        alert("Please select the type of animal desired.");
    }

    var alongInput = document.getElementsByClassName("along");
    var counterAlong = 0;
    for(var index = 0 ; index < alongInput.length ; index++)
    {
        if(alongInput[index].checked)
        {
            counterAlong++;
        }
    }
 
    if(counterAlong != 3) {
        alert("Please select if you animal gets along with dogs, cats or children.");
    }

    var genderInput = document.getElementsByName("gender");
    var counterGender = 0;
    for(var index = 0 ; index < genderInput.length ; index++)
    {
        if(genderInput[index].checked)
        {
            counterGender++;
            break;
        }
    }
    if(counterGender == 0) {
        alert("Please select the type of gender desired.");
    }

    var dogBreed = document.getElementById("dog-breed"); 
    if(dogBreed.selectedIndex == 0)
    {
        alert("Please select a breed of dog");
    }

    var catBreed = document.getElementById("cat-breed"); 
    if(catBreed.selectedIndex == 0)
    {
        alert("Please select a breed of cat");
    }

    var age = document.getElementById("age"); 
    if(age.selectedIndex == 0)
    {
        alert("Please select a preferred age");
    }

    var descriptionOfPet = document.forms["give"]["description"].value; 
    if(descriptionOfPet ==""){
        alert("Please enter a description of your pet"); 
    }

    var ownerName = document.forms["give"]["name"].value; 
    if(ownerName ==""){
        alert("Please enter your name"); 
    }

    var ownerFamName = document.forms["give"]["fname"].value; 
    if(ownerFamName == ""){
        alert("Please enter your family name"); 
    }

    var patternValidEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    var ownerEmail = document.forms["give"]["email"].value; 
    if(ownerEmail ==""){
        alert("Please enter an email adress"); 
    }
    else if(ownerEmail.match(patternValidEmail)){
        alert ("Good email!"); 
    }
    else{
        alert("Enter a valid email.");
    }

}


function findPet(){
    
    var animalType = document.getElementsByName("pet"); 
    var counterAnimal = 0; 

    for(var i = 0; i < animalType.length; i++){
        if(animalType[i].checked){
            counterAnimal++; 
            break;
        }   
    }

    if(counterAnimal==0){
        alert("Please select the type of animal desired.");
    }

    var dogBreed = document.getElementById("dog-breed"); 
    if(dogBreed.selectedIndex != 0){
        
    }
    else{
        alert("Please select a breed of dog");
    }

    var catBreed = document.getElementById("cat-breed"); 
    if(catBreed.selectedIndex != 0){
        
    }
    else{
        alert("Please select a breed of cat");
    }

    var animalGender = document.getElementsByName("gender"); 
    var counterGender= 0; 

    for(var i = 0; i < animalGender.length; i++){
        if(animalGender[i].checked){
            counterGender++; 
            break;
        }   
    }

    if(counterGender==0){
        alert("Please select the type of gender desired.");
    }

    var age = document.getElementById("age"); 
    if(age.selectedIndex != 0){
        
    }
    else{
        alert("Please select a preferred age");
    }


    var animalAlong = document.getElementsById("along"); 
    var counterAlong= 0; 

    for(var i = 0; i < animalAlong.length; i++){
        if(animalAlong[i].checked){
            counterAlong++; 
            break;
        }   
    }

    if(counterAlong==0){
        alert("Please precise if the pet must get along with children or other animals.");
    }
}

