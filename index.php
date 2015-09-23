<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Courtney Deveau Majocha DWA 15 P2</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- My custom CSS -->
<link rel="stylesheet" href="styles.css">

<!-- A Google Font: Open Sans -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>


</head>

<?php require 'logic.php'; ?>

<body>
    <div class="container">
  		<div class="row">
			<h1 class="site-title"><strong>P2: XKCD Password Generator</strong></h1>
		</div>
<div class="body-content">
<p>Need a password? Fill out the form below to your specifications, and obtain a randomly generated password that meets your specific requirements!</p>
<form method="post" action="index.php">
How many words would you like to include in your password (Max 9)? <input type="number" name="words">
<br />
Include Numbers? <input type="checkbox" value="value1" name="numbers">
<br />
Incude  symbols? <input type="checkbox" value="value2" name="symbols">
<br /><br />

<input type='submit' value='Get My Password!'>
	</form>

<br />
<div class="output">
<strong>
<?php
$words = '';
$num  = '';
$mypass = '';

if (isset($_POST['words'])) {
	$num = (int) $_POST["words"];

if ($num < $min || $num > $max) {
	echo "You must enter a number between 1-9";
   } else

for($i = 0; $i < $num; $i++){
   if (isset($_POST['words']))  {
		    $mypass = $wordbank[array_rand($wordbank)];
		    echo $mypass;
		  }
   if (isset($_POST['numbers']) && isset($_POST['words']) ) {
		  echo "7";
   }
   if (isset($_POST['symbols']) && isset($_POST['words']) ) {
		  echo "!";
   }
}
}
?>
     </strong>
   </div>
     <br /><br />
      <p><img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd comic"></p>
      </div>
      </div>
	</body>
</html>
