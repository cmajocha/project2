<?php

//make sure I get a value between 1 and 9
$min = 1;
$max = 9;
$NotNumber = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if ($min <= $_POST["words"] && $_POST["words"] <= $max) {
   } else {
     $NotNumber = "You must enter a number between 1 and 9";
   }



//Creating an array to store the list of words I wil use to generate my passwords
$wordbank = Array(
    0 => 'happy',
    1 => 'puppy',
    2 => 'sunshine',
	3 => 'television',
	4 => 'peace',
	5 => 'love',
	6 => 'music',
	7 => 'snail',
	8 => 'window',
	9 => 'clouds',
	10 => 'soccer',
	11 => 'college',
	12 => 'baby',
	13 => 'lawn',
	14 => 'owl',
	15 => 'laughter',
	16 => 'selfie',
	17 => 'panda',
	18 => 'house',
	19 => 'football',
	20 => 'win',
);
//iterate through my array to pull out random items
}

?>
