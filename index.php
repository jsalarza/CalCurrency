<!DOCTYPE html>
<html>
<title>CalCurrency</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
form{

    padding-top: 150px;
    padding-right: 30px;
    padding-bottom: 150px;
    padding-left: 80px;
}

</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <img src="CalCurrency.png" style="width:100%">
    <p class="w3-opacity"><i>A Currency Converter Site</i></p>
    <p class="w3-justify">CalCurrency is a Currency Converter Website made with regards to the completion of our Project in Cloud Computing as Software as a Service. This is to be deployed on an internet hosting service, like Microsoft Azure, Heroku and etc. One of the best option to use in deploying my site is Heroku. The rates used to calculate by CalCurrency is updated as of March 20, 2017.
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
<center>
<form id="unitConversion">
    <p>Convert Here</p>

    <input name="change" type="text" id ="change" oninput ="currencyConverter(this.value)" onchange="currencyConverter(this.value)"/>
    <select id="unit" name= "unit" onchange="currencyConverter(document.getElementById('change').value)">

      <option value="" disabled>Select currency from List...</option>

      <option value="Php">Philippine Peso</option>
        <option value="usDollar">US Dollar</option>
        <option value="jYen">Japanese Yen</option> 
        <option value="Euro">Euro</option>
        <option value="cYuan">Chinese Yuan</option>

    </select>

    <br>
    <br>
    
    <input name="unitConvert" type="text" id="unitConvert"/>
    
    <select id="unit2" name= "unit2" onchange="currencyConverter(document.getElementById('change').value)">

        <option value="" disabled>Select currency from List...</option>

        <option value="Php">Philippine Peso</option>
        <option value="usDollar">US Dollar</option>
        <option value="jYen">Japanese Yen</option> 
        <option value="Euro">Euro</option>
        <option value="cYuan">Chinese Yuan</option>

    </select>
</form>
</center>
  </div>
  
<!-- End Page Content -->
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
  <i class="fa fa-instagram w3-hover-text-purple"></i>
  <i class="fa fa-snapchat w3-hover-text-yellow"></i>
  <i class="fa fa-pinterest-p w3-hover-text-red"></i>
  <i class="fa fa-twitter w3-hover-text-light-blue"></i>
  <i class="fa fa-linkedin w3-hover-text-indigo"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>

    var units1 = {
        'Php': 1,  
        'usDollar': 0.020,
        'jYen': 2.25,
        'Euro': 0.019,
        'cYuan': 0.14,
    };

    var units2 = {
        'usDollar': 1,
        'Php': 50.19,
        'jYen': 112.71,
        'Euro': 0.93,
        'cYuan': 6.91,
    };

    var units3 = {
        'jYen': 1,
        'Php': 0.45,  
        'usDollar': 0.0089,
        'Euro': 0.0083,
        'cYuan': 0.061,
    };

    var units4 = {
        'Euro': 1,
        'Php': 53.97,  
        'usDollar': 1.08,
        'jYen': 121.21,
        'cYuan': 7.43,
    };

    var units5 = {
        'cYuan': 1,
        'Php': 7.26,  
        'usDollar': 0.14,
        'jYen': 16.32,
        'Euro': 0.13,
    };


    function currencyConverter(valNum) {
        var unitSelect = document.getElementById('unit');
        var unitSelect2 = document.getElementById('unit2');
        var basis = {};

        if(unitSelect.value == "Php"){ 
            basis = units1;
        }

        else if(unitSelect.value == "usDollar"){
            basis = units2;
        }

        else if(unitSelect.value == "jYen"){
            basis = units3;
        }

        else if(unitSelect.value == "Euro"){
            basis = units4;
        }

        else if(unitSelect.value == "cYuan"){
            basis = units5;
        }

        var num = parseFloat(valNum);
        var multiplier = basis[unitSelect2.value];
        var result = num*multiplier;
        document.getElementById('unitConvert').value = result.toFixed(2);
    };

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
