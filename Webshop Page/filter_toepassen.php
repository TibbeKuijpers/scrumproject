<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TweedehandsFietsen - Shop</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="filtered.css" type="text/css" rel="stylesheet">
</head>

<body>
	
	
	<div id="container">
    <div id="header">
        <h1>Tweedehandsfietsen.nl<br><p>Elke fiets verdient een tweede kans!!</p></h1>
		
        <nav class="inloggen"><a href="#">Inloggen</a></nav>
        <nav class="registeren"><a href="#">Registreren</a></nav>
        <nav class="winkelwagen"><a href="#"><i class="fas fa-shopping-cart"></i></a></nav>

            <nav class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
    </div>
	
    <article id="content">
		<?php
			if(isset($_POST['filter'])){
				echo "Toegepaste filters: Merk: ". $_POST['merk'] . " / Maat: " . $_POST['maat'] . " / Gender: " . $_POST['gender'];
			}
		?>
		<div class="filter">
			
			
			<div class="card" style="width: 18rem;">
  				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
			</div>
		</div>
			<div class="filter">
			
			
			<div class="card" style="width: 18rem;">
  				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
			</div>
		</div>
		
			<div class="filter">
			
			
			<div class="card" style="width: 18rem;">
  				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
			</div>
		</div>
			<div class="filter">
			
			
			<div class="card" style="width: 18rem;">
  				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
			</div>
		</div>
			<div class="filter">
			
			
			<div class="card" style="width: 18rem;">
  				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
			</div>
		</div>
			<div class="filter">
			
			
			<div class="card" style="width: 18rem;">
  				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
				<a href="#"><img src="Images/download_A20_Rectangle_446_pattern.png" class="card-img-top" alt="..."></a>
  				<div class="card-body">
    				<h5 class="card-title">Lorem Ipsum</h5>
   					<p class="card-text">Batavus<br>€500,-</p>
  				</div>
			</div>
		</div>
		
			<br><br>
			
		</div>
		<div class="back">
			<a class="btn btn-primary" href="Shop.html" role="button">Terug naar filters</a>
		</div>
		</article>

		
		
    <div id="footer"></div>
</div>
	
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>