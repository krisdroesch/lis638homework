<!DOCTYPE html>
<html>
<style>
body {
	font-family: 'Roboto';
	font-size: 20px;
}
h1 {
	text-align: center;
	color: #0D85D3;
	text-decoration: underline;
}
</style>
<head>
</head>
<body>
<h1>Challenge 1: Correct Change</h1>
<p>You paid for a $15.63 lunch with a $20 bill.</p>
<?php
$change = 437;
$dollar = 100;
$quarter = 25;
$dime = 10;
$nickle = 5;
$cent = 1;

	echo "Your change is $change cents. You are due:";
	
	$dollar_back = (int) ($change / $dollar);
	$quarter_back = (int) (($change - ($dollar_back * $dollar)) / $quarter);
	#$dime_back = (int) ($change - (($dollar_back * $dollar () - $quarter_back) / $dime);
	#$nickle_back = (int)
	#$cent_back = (int)
	
	echo "<ul>
			<li> $dollar_back dollar(s)</li>
			<li> $quarter_back quarter(s)</li>
			<li> dime(s)</li>
			<li> nickle(s)</li>
			<li> cent(s)</li>
		</ul>";
?>
<p>Don't forget to take your change!</p>
<h1>Challenge 2: 99 Bottles of Beer</h1>
<?php
$bottles = 99;
if ($bottles > 0) {
  while ($bottles > 0) {
    echo "$bottles bottles of beer on the wall,<br>$bottles bottles of beer,<br> ";
    echo "take one down and pass it around,<br>" . --$bottles . " bottles of beer on the wall.<br> ";
	}
}
?>
<p>The song is done! Good luck getting it out of your head.</p>
</body>
</html>