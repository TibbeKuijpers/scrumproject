<?php
session_start();

if(isset($_POST['loginSubmit'])){
      if(empty($_POST['loginNaam'])){echo"Je hebt geen naam ingevuld!";} 
  elseif (empty($_POST['loginPass'])){echo"Je hebt geen wachtwoord ingevuld!";} 
  else{ 
    $sLid = mysql_query("SELECT id,naam FROM leden  
                         WHERE naam='".$_POST['loginNaam']."' AND password='".md5($_POST['loginPass'])."' 
                         LIMIT 1") or die(mysql_error()); 
  if(mysql_num_rows($sLid)==0){echo"Deze inlog gevens zijn incorrect!";}
  else{ 
    $fLid = mysql_fetch_assoc($sLid); 
    $_SESSION['user_id'] = $fLid['id']; 
    $_SESSION['user_naam'] = $fLid['naam']; 
    $_SESSION['lastActive'] = time(); 
    header("Location: homepageIngelogd.html");  
    exit;   
    }
  }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>
	
	<form method="post">
	Naam: <input type="text" name="loginNaam" />
	Wachtwoord: <input type="password" name="loginPass" />
	<input type="submit" name="loginSubmit" value="Log in!" /> 
	</form>
	
</body>
</html>