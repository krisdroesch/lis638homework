<!DOCTYPE html>
<html>
<head>
<style>
p {
    font-family: "Times New Roman", Times, serif;
    font-size: 20px;
}
h1 {
    font-family: "Times New Roman", Times, serif;
    text-align: center;
    color: #650B56;
}
h2 {
    font-family: "Times New Roman", Times, serif;
    text-align: center;
    color: #650B56;
</style>
</head>
<body>
<h1>Challenge 1: ISBN Validation</h1>
<p>You are looking for a hardcover copy of <i><a href="https://www.amazon.com/Madwoman-Upstairs-Novel-Catherine-Lowell/dp/1501124218/ref=tmm_hrd_swatch_0?_encoding=UTF8&qid=1486844447&sr=8-1" target="_blank">The Madwoman Upstairs</a></i>, by Catherine Lowell.</p>
<p>You have a 10-digit ISBN (1501124218). Is it a valid ISBN?</p>

<?php
$isbn = 1501124218; //Defining ISBN
$isbn_formula = (10 * substr($isbn, 0, 1)) + (9 * substr($isbn, 1, 1)) + (8 * substr($isbn, 2, 1)) + (7 * substr($isbn, 3, 1)) + (6 * substr($isbn, 4, 1)) + (5 * substr($isbn, 5, 1)) + (4 * substr($isbn, 6, 1)) + (3 * substr($isbn, 7, 1)) + (2 * substr($isbn, 8, 1)) + (1 * substr($isbn, 9, 1)); //Formula to run the math

if ($isbn_formula % 11 == 0) {
	echo "Yes! It is a valid ISBN. Enjoy the book!"; //Text to print if ISBN is valid
} else { 
	echo "No, it’s not a valid ISBN. Find valid ISBNs with this <a href='http://www.isbnsearch.org/' target='_blank'>ISBN search tool.</a>"; //Text to print if ISBN is invalid, w/link to ISBN Search site
}
?>
<br>
<br>
<h1>Challenge 2: Coin Toss</h1>
<h2>Part A: Random Coin Tosses</h2>
<p>Flip pennies 1, 3, 5, 7, and 9 times. (Because you have lots of spare time.)</p>
<?php

	$heads = "<img src='https://webdevdbcourses.prattsi.org/~kdroesch/penny-heads.png' alt='penny heads' height='75' width='75'>"; //print out and HTML img tag for heads up penny
	$tails = "<img src='https://webdevdbcourses.prattsi.org/~kdroesch/penny-tails.png' alt='penny tails' height='75' width='75'>"; //print out and HTML img tag for heads up penny

function coin_flips($heads,$tails) { //funciton for simulating and replicating coin flips
	$flips = array($heads, $tails);
    $flip_counter = count($flips);	
    $flip_outcome = (mt_rand()%$flip_counter);
    $flip_times = 1; //Number of times the coin is flipped, for echoing
	echo "Coin flipped $flip_times time(s)";
	echo "<br>";
	echo "$heads";
}
	coin_flips($heads, $tails); //calling function for 1 flip
	#coin_flips($heads, $tails, ($flip_times + 3)); //calling function for 3 flips -> not producing right outcome
	#coin_flips() //calling function for 5 flips
	#coin_flips() //calling function for 7 flips
	#coin_flips() //calling function for 9 flips
?>
<br>
<br>
<h2>Part B: Two Heads in a Row</h2>
<p>Let's flip pennies until we get 2 heads in a row.</p>
<?php
$heads = "<img src='https://webdevdbcourses.prattsi.org/~kdroesch/penny-heads.png' alt='penny heads' height='75' width='75'>"; //print out and HTML img tag for heads up penny
$tails = "<img src='https://webdevdbcourses.prattsi.org/~kdroesch/penny-tails.png' alt='penny tails' height='75' width='75'>"; //print out and HTML img tag for heads up penny
$heads_up_counter = 0;
$flip_counter = 0;
  while ($heads_up_counter < 2) {
        $flip = mt_rand(0,1);
        $flip_counter ++;
        if ($flip){
            $heads_up_counter ++;
            echo "$heads";
        	}
        else {
            $headCount = 0;
            echo "$tails";
        	}
    	}
    echo "<p>It took {$flip_counter} flips. Congratulations!</p>";
//Am getting random coin flips, but not consistently 2 in a row...
?>
</body>
</html>














