<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tweedehandsfietsen</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="Homepage.css" type="text/css" rel="stylesheet" >
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tweedehandsfietsen";

$connect = new mysqli($servername, $username, $password, $database);

if ($connect->connect_error) {
die("FOUT: " . $connect->connect_error);
}

$fietsQuery = "SELECT * FROM fietsen";
$result = $connect->query($fietsQuery);
$row = $result->fetch_assoc();
while(1)
    {
        echo"<tr>";

        echo"<td>{$row['fietsNaam']}<br> 
        {$row['fietsMerk']}<br> 
        {$row['prijs']} </td>";
        echo"</tr>";
}
$ratingQuary = "SELECT rating FROM reviews";
$result = $connect->query($ratingQuary);
$row= $result->fetch_assoc();
$ratingGetal = $row['rating'];

if(isset($_POST['inschrijven']) && isset($_POST['email'])){

    $_POST{'ingeschreven'}= 1;
    $query = "INSERT INTO `klantgegevens` (`klantID`, `gebruikersNaam`, `geslacht`, `voorNaam`, `achterNaam`, `telefoonNummer`, `adres`, `woonPlaats`, `postCode`, `email`, `profiel`, `inschrijven nieuwsbrief`) VALUES (NULL, '', '', '', '', '', '', '', '', '{$_POST['email']}','','{$_POST['ingeschreven']}')";

//	$query = "INSERT INTO 'klantgegevens' (klantID, `gebruikersNaam`, `geslacht`, `voorNaam`, `achterNaam`, `telefoonNummer`, `adres`, `woonPlaats`, `postCode`, `email`) VALUES (NULL, '{$_POST['gebruikersnaam']}', '{$_POST['geslacht']}', '{$_POST['voornaam']}', '{$_POST['achternaam']}', '{$_POST['telefoonnummer']}', '{$_POST['adres']}', '{$_POST['woonplaats']}', '{$_POST['postcode']}', '{$_POST['email']}')";

    $add = $connect->query($query);

}

function rating($rating){

    $hSter = 5 - $rating;
    $ster = 5 - $hSter;
    while($ster>0){
        echo"<i class=\"fas fa-star kleurSter\"></i>";
        $ster--;
    }
    while($hSter>0){
        echo"<i class=\"fas fa-star\"></i>";
        $hSter--;
    }
}
?>
<div id="container">
    <div id="header">
        <h1>Tweedehandsfietsen.nl<br><p>Elke fiets verdient een tweede kans!!</p></h1>
        <nav class="inloggen"><a href="#">Inloggen</a></nav>
        <nav class="registeren"><a href="#">Registreren</a></nav>
        <nav class="winkelwagen"><a href="#"><i class="fas fa-shopping-cart"></i></a></nav>

            <nav class="menu">
                <ul>
                    <li><span>Home</span></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
    </div>

<!--einde header-->

    <div id="content">
        <img class="plaatje" src="Images/PdF_Tweedehands_940x235px_A11_Rectangle_117_pattern.png" alt="plaatje winkel">
        <nav class="menuLinks">
            <ul>
                <li><b>Categorieën</b></li>
                <li><a href="#">Heren fietsen</a></li>
                <li><a href="#">Dames fietsen</a></li>
                <li><a href="#">Kinder fietsen</a></li>
                <li><a href="#">Antieke fietsen</a></li>
                <li><a href="#">Stations fietsen</a></li>
                <li><a href="#">Elektrische fietsen</a></li>
            </ul>
        </nav>

        <div class="acties">
             <h2>Acties</h2>
            <div class="fiets1">
                <a href="#"><img alt="Fiets" src="Images/download_A20_Rectangle_446_pattern.png"></a>
                <hr>
                <?php echo $infoFiets;?>
                <a  class="bekijken" href="#">Bekijken</a>
            </div>
            <div class="fiets1">
                <a href="#"><img alt="Fiets" src="Images/download_A20_Rectangle_446_pattern.png"></a>
                <hr>
                <?php echo $infoFiets;?>
                <a  class="bekijken" href="#">Bekijken</a>
            </div>
            <div class="fiets1">
                <a href="#"><img alt="Fiets" src="Images/download_A20_Rectangle_446_pattern.png"></a>
                <hr>
                <?php echo $infoFiets;?>
                <a  class="bekijken" href="#">Bekijken</a>
            </div>
        </div>

        <nav class="menuRechts">
            <ul>
                <li><b>Sociale media</b></li>
                <li><a href="https://www.instagram.com/?hl=nl"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i> Twitter<br><br></a></li>
                <li><b>Contact</b></li>
                <li><a href="#"><i class="fas fa-mobile-alt"></i> 06-12345678</a></li>
                <li><a href="#"><i class="fas fa-envelope-square"></i> Tweedehands@fiets.nl</a></li>
                <li><a href="https://www.google.com/maps/place/6942+AE+Didam/@51.9398123,6.1307227,19.5z/data=!4m5!3m4!1s0x47c79ece3c9a2ff9:0x27b16a0339e5c7b2!8m2!3d51.9398543!4d6.131059"><i class="fas fa-map-marked-alt"></i> Didam 6942 AE</a></li>
            </ul>
        </nav>

<hr class="balk">
<!--bovenkant website-->
        <div class="ontFiets">
            <h2>Onlangs toegevoegd</h2>
            <div class="fiets1">
                <a href="#"><img alt="Fiets" src="Images/download_A20_Rectangle_446_pattern.png"></a>
                <hr>
                <?php echo $infoFiets;?>
                <a  class="bekijken" href="#">Bekijken</a>
            </div>
            <div class="fiets1">
                <a href="#"><img alt="Fiets" src="Images/download_A20_Rectangle_446_pattern.png"></a>
                <hr>
                <?php echo $infoFiets;?>
                <a  class="bekijken" href="#">Bekijken</a>
            </div>
            <div class="fiets1">
            <a href="#"><img alt="Fiets" src="Images/download_A20_Rectangle_446_pattern.png"></a>
            <hr>
                <?php echo $infoFiets;?>
            <a  class="bekijken" href="#">Bekijken</a>
        </div>
            <div class="fiets1">
                <a href="#"><img alt="Fiets" src="Images/download_A20_Rectangle_446_pattern.png"></a>
                <hr>
                <?php echo $infoFiets;?>
                <a  class="bekijken" href="#">Bekijken</a>
            </div>
            <div class="fiets1">
                <a href="#"><img alt="Fiets" src="Images/download_A20_Rectangle_446_pattern.png"></a>
                <hr>
                <?php echo $infoFiets;?>
                <a  class="bekijken" href="#">Bekijken</a>
            </div>
        </div>



<hr class="balk">
        <article class="ariekel">
            <h2>Lorem Ipsum</h2><br><p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in de jaren '60 populair geworden met de introductie van Letraset vellen met Lorem Ipsum passages en meer recentelijk door desktop publishing software zoals Aldus PageMaker die versies van Lorem Ipsum bevatten</p>
            <h2>Inschrijven nieuwsbrief</h2>

            <form class="nieuwsbrief" method="post">E-mail <input type="email" name="email" required ><input type="submit" value="Inschrijven" name="inschrijven"></form>

        </article>

        <hr class="balk">

    <div class="reviews">
    <h2>Reviews</h2>
    <div>
        <div class="klantReactieLinks">
            <div class="krLinks">
                <div class="krRating"><?php rating($ratingGetal) ?></div>
                <p>Super kwaliteit</p>

            </div><div class="krRechts">
            <b class="kNaam"><br>Klant-1</b>
                <img class="pf" src="Images/blank-profile-picture-973460_1280.png" alt="Profiel">
            </div>
        </div>
        <div class="klantReactieRechts">
            <div class="krLinks">
                <div class="krRating"><?php rating($ratingGetal) ?></div>
                <p>Super kwaliteit</p>

            </div><div class="krRechts">
            <b class="kNaam"><br>Klant-1</b>
            <img class="pf" src="Images/blank-profile-picture-973460_1280.png" alt="Profiel">
        </div>
        </div>
        <div class="klantReactieLinks">
            <div class="krLinks">
                <div class="krRating"><?php rating($ratingGetal) ?></div>
                <p>Super kwaliteit</p>

            </div><div class="krRechts">
            <b class="kNaam"><br>Klant-1</b>
            <img class="pf" src="Images/blank-profile-picture-973460_1280.png" alt="Profiel">
        </div>
        </div>
        <div class="klantReactieRechts">
            <div class="krLinks">
                <div class="krRating"><?php rating($ratingGetal) ?></div>
                <p>Super kwaliteit</p>

            </div><div class="krRechts">
            <b class="kNaam"><br>Klant-1</b>
            <img class="pf" src="Images/blank-profile-picture-973460_1280.png" alt="Profiel">
        </div>
        </div>
        <div class="klantReactieLinks">
            <div class="krLinks">
                <div class="krRating"><?php rating($ratingGetal) ?></div>
                <p>Super kwaliteit</p>

            </div><div class="krRechts">
            <b class="kNaam"><br>Klant-1</b>
            <img class="pf" src="Images/blank-profile-picture-973460_1280.png" alt="Profiel">
        </div>
        </div>
        <div class="klantReactieRechts">
            <div class="krLinks">
                <div class="krRating"><?php rating($ratingGetal) ?></div>
                <p>Super kwaliteit</p>

            </div><div class="krRechts">
            <b class="kNaam"><br>Klant-1</b>
            <img class="pf" src="Images/blank-profile-picture-973460_1280.png" alt="Profiel">
        </div>
        </div>
        <div class="klantReactieLinks">
            <div class="krLinks">
                <div class="krRating"><?php rating($ratingGetal) ?></div>
                <p>Super kwaliteit</p>

            </div><div class="krRechts">
            <b class="kNaam"><br>Klant-1</b>
            <img class="pf" src="Images/blank-profile-picture-973460_1280.png" alt="Profiel">
        </div>
        </div>
        <div class="klantReactieRechts">
            <div class="krLinks">
                <div class="krRating"><?php rating($ratingGetal) ?></div>
                <p>Super kwaliteit</p>

            </div><div class="krRechts">
            <b class="kNaam"><br>Klant-1</b>
            <img class="pf" src="Images/blank-profile-picture-973460_1280.png" alt="Profiel">
        </div>
        </div>

    </div>
    </div>
    </div>
<!--einde content    -->
    <div id="footer"></div>
</div>
<?php $connect->close();
?>
</body>
</html>