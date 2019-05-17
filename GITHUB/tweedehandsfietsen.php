<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
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
	
	$sql = "SELECT * FROM klantgegevens";
	$result = $connect->query($sql);
		
	//hier bezig

	
	//hierboven bezig
	
	if(isset($_POST['invoeren'])){
	$query = "INSERT INTO klantgegevens (klantID, `gebruikersNaam`, `geslacht`, `voorNaam`, `achterNaam`, `telefoonNummer`, `adres`, `woonPlaats`, `postCode`, `email`) VALUES (NULL, '{$_POST['gebruikersnaam']}', '{$_POST['geslacht']}', '{$_POST['voornaam']}', '{$_POST['achternaam']}', '{$_POST['telefoonnummer']}', '{$_POST['adres']}', '{$_POST['woonplaats']}', '{$_POST['postcode']}', '{$_POST['email']}')";
	}
	$result = $connect->query($sql);
			echo "<br>";
		echo "<br>";
	while($row = $result->fetch_assoc()){
		echo "<tr>
			<td>{$row['gebruikersNaam']}</td>
			<td>{$row['geslacht']}</td>
			<td>{$row['voorNaam']}</td>
			<td>{$row['achterNaam']}</td>
			<td>{$row['telefoonnummer']}</td>
			<td>{$row['adres']}</td>
			<td>{$row['woonPlaats']}</td>
			<td>{$row['postCode']}</td>
			<td>{$row['email']}</td>
		</tr>";}
	?>

	
	<h1>Mijn gegevens</h1>
		<form>
			Gebruikersnaam*: <input type="text" name="gebruikersnaam" required/> <br>
	
	        Geslacht: <input type="text" name="geslacht" /> <br>
	
	        Voornaam*: <input type="text" name="voorNaam" required/> <br>
	
	        Achternaam*: <input type="text" name="achterNaam"/> <br>
	
	        Telefoonnummer*: <input type="number" name="telefoonnummer" required/> <br>
	
	        Adres*: <input type="text" name="adres" required/> <br>
	
	        Woonplaats*: <input type="text" name="woonPlaats" required/> <br>
	
	        Postcode*: <input type="text" name="postCode" required/> <br>
	
	        E-mail*: <input type="email" name="email" required/> <br>
			<input type="submit" name="invoeren"/> <br>
		</form>

	
	<table border="1">
		<tr>
			<th>Gebruikersnaam</th>
			<th>Geslacht</th>
			<th>Voornaam</th>
			<th>Achternaam</th>
			<th>Telefoonnummer</th>
			<th>Adres</th>
			<th>Woonplaats</th>
			<th>Postcode</th>
			<th>E-Mail</th>
		</tr>
		
	<?php
	
		
	$connect->close();
	?>

</body>
</html>