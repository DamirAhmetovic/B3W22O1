<!DOCTYPE html>
<html>
<head>
<title>Mad Lips</title>
<link rel="stylesheet" href="madlips.css">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
</head>
<body>

	<div class="header"> <h1>Mad lips</h1></div>

    <div class="header2"> <p class="Onkunde"> er heerst paniek... Onkunde</p> </div>

    <div class="container">
		<?php 
		    echo "Er heerst paniek in het koninkrijk ";
		    echo $_POST["land"];
		    echo " koning ";
		    echo $_POST["spijbel"];
		    echo " is ten einde raad en als koning ";
		    echo $_POST["spijbel"];
		    echo " ten einde raad is, dan roept hij zijn ten-einde-raadsheer ";
		    echo $_POST["persoon"];
		    echo "<br><br>";
		
		    echo $_POST["persoon"];
		    echo "! Het is een ramp! Het is een schande!<br><br>";
		
		    echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand? 	<br><br>";
		
		    echo "Mijn ";
		    echo $_POST["huisdier"];
		    echo " is verdwenen! Zo maar, zonder waarschuwing. En ik had net ";
		    echo $_POST["speelgoed"];
		    echo " voor hem gekocht! <br><br>";
		
		    echo "Majesteit, uw ";
		    echo $_POST["huisdier"];
		    echo " komt vast vanzelf weer terug! <br><br> ";
		
		    echo "Ja, da's erg leuk en aardig, maar hoe moet ik in de 	tussentijd ";
		    echo $_POST["bezigheid"];
		    echo " leren? <br><br> ";
		
		    echo "Maar Sire, daar kunt u toch uw ";
		    echo $_POST["kopen"];
		    echo " voor gebruiken. <br><br>";
		
		    echo $_POST["persoon"];
		    echo ", je hebt helmaal gelijk! Wat zou ik doen als ik jou niet 	had. <br><br>";
		
		    echo "Mij ";
		    echo $_POST["bezigheid"];
		    echo ", Sire.";
		    ?>
	</div>
	<div class="footer2"> <p class="footerText2"> damir ahmetovic </p> </div>


    </body>
</html>
