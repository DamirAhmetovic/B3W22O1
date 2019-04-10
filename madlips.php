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
     function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }


    $huisdierErr = $persoonErr = $landErr = $verveeltErr = $speelgoedErr = $spijbelErr = $kopenErr = $bezigheidErr =  "";
    $huisdier = $persoon = $land = $verveelt = $speelgoed = $spijbel = $kopen = $bezigheid = "";
    

   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["huisdier"])) {
            $huisdierErr = "huisdier is required";
    }
    else {
        $huisdier = test_input($_POST["huisdier"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$huisdier)) {
                $huisdierErr = "Only letters and white space allowed"; 
            }
    }
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["persoon"])) {
            $persoonErr = "persoon is required";
    }
    else {
        $persoon = test_input($_POST["persoon"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$persoon)) {
                $persoonErr = "Only letters and white space allowed"; 
            }
    }
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["land"])) {
            $landErr = "land is required";
    }
    else {
        $land = test_input($_POST["land"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$land)) {
                $landErr = "Only letters and white space allowed"; 
            }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["verveelt"])) {
            $verveeltErr = "verveelt is required";
    }
    else {
        $verveelt = test_input($_POST["verveelt"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$verveelt)) {
                $verveeltErr = "Only letters and white space allowed"; 
            }
    }
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["speelgoed"])) {
            $speelgoedErr = "speelgoed is required";
    }
    else {
        $speelgoed = test_input($_POST["speelgoed"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$speelgoed)) {
                $speelgoedErr = "Only letters and white space allowed"; 
            }
    }
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["spijbel"])) {
            $spijbelErr = "spijbel is required";
    }
    else {
        $spijbel = test_input($_POST["spijbel"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$spijbel)) {
                $spijbelErr = "Only letters and white space allowed"; 
            }
    }
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["kopen"])) {
            $kopenErr = "kopen is required";
    }
    else {
        $kopen = test_input($_POST["kopen"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$kopen)) {
                $kopenErr = "Only letters and white space allowed"; 
            }
    }
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["bezigheid"])) {
            $bezigheigErr = "bezigheid is required";
    }
    else {
        $bezigheid = test_input($_POST["bezigheid"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$bezigheid)) {
                $bezigheigErr = "Only letters and white space allowed"; 
            }
    }
}


    ?>

    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="huisdier" required>
            <span class="error">* <?php echo $huisdierErr;?></span>
            <br><br>
    
            Wie is de belangrijkste persoon in je leven? <input type="text" name="persoon" required>
            <span class="error">* <?php echo $persoonErr;?></span>
            <br><br>
    
            In welk land zou je graag willen wonen? <input type="text" name="land" required>
            <span class="error">* <?php echo $landErr;?></span>
            <br><br>
    
            Wat doe je als je je verveelt? <input type="text" name="verveelt" required>
            <span class="error">* <?php echo $verveeltErr;?></span>
            <br><br>
    
            Met welk speelgoed speelde je als kind het meest? <input type="text" name="speelgoed" required>
            <span class="error">* <?php echo $speelgoedErr;?></span>
            <br><br>
    
            Bij welke docent spijbel je het liefst? <input type="text" name="spijbel" required>
            <span class="error">* <?php echo $spijbelErr;?></span>
            <br><br>
    
            Als je € 100.000,- had, wat zou je dan kopen? <input type="text" name="kopen" required>
            <span class="error">* <?php echo $kopenErr;?></span>
            <br><br>
    
            Wat is je favoriete bezigheid? <input type="text" name="bezigheid" required>
            <span class="error">* <?php echo $bezigheigErr;?></span>
            <br><br>


            <input type="submit" value="Versturen">
        </form>
    </div>

    <div>
        <?php 
            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Er heerst paniek in het koninkrijk ";
            echo $land;
            echo " koning ";
            echo $spijbel;
            echo " is ten einde raad en als koning ";
            echo $spijbel;
            echo " ten einde raad is, dan roept hij zijn ten-einde-raadsheer ";
            echo $persoon;
            echo "<br><br>";
        
            echo $persoon;
            echo "! Het is een ramp! Het is een schande!<br><br>";
        
            echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?  <br><br>";
        
            echo "Mijn ";
            echo $huisdier;
            echo " is verdwenen! Zo maar, zonder waarschuwing. En ik had net ";
            echo $speelgoed;
            echo " voor hem gekocht! <br><br>";
        
            echo "Majesteit, uw ";
            echo $huisdier;
            echo " komt vast vanzelf weer terug! <br><br> ";
        
            echo "Ja, da's erg leuk en aardig, maar hoe moet ik in de   tussentijd ";
            echo $bezigheid;
            echo " leren? <br><br> ";
        
            echo "Maar Sire, daar kunt u toch uw ";
            echo $kopen;
            echo " voor gebruiken. <br><br>";
        
            echo $persoon;
            echo ", je hebt helmaal gelijk! Wat zou ik doen als ik jou niet     had. <br><br>";
        
            echo "Mij ";
            echo $verveelt;
            echo ", Sire.";
        }
            ?>
    </div>

    <div class="footer"> <p class="footerText"> damir ahmetovic </p> </div>

    </body>
</html>