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
    color: #0066cc;
}
table {
    border-collapse: collapse;
    text-align: center;
}

table, th, td {
    border: 1px solid black;
    padding: 15px;
}
table, th {
	background-color: #d4e3e5;

}
</style>
</head>
<body>
<h1>Challenge 1: Book Lists</h1>

<?php
$books = array( //Creating the multidimensional array to hold all book info
		array('<a href="https://www.amazon.com/PHP-MySQL-Web-Development-4th/dp/0672329166/ref=sr_1_1?s=books&ie=UTF8&qid=1487557088&sr=1-1&keywords=9780672329166" target="_blank">PHP and MySQL Web Development</a>', "Luke Welling", "144", "Paperback", "978-0672329166", "$31.63"),
		array('<a href="https://www.amazon.com/Web-Design-HTML-JavaScript-jQuery/dp/1118907442/ref=sr_1_1?s=books&ie=UTF8&qid=1487557132&sr=1-1&keywords=9781118907443" target="_blank">Web Design with HTML, CSS, JavaScript and jQuery</a>', "Jon Duckett", "135", "Paperback", "978-1118907443", "$41.23"),
		array('<a href="https://www.amazon.com/PHP-Cookbook-Solutions-Examples-Programmers/dp/144936375X/ref=sr_1_1?s=books&ie=UTF8&qid=1487557186&sr=1-1&keywords=9781449363758" target="_blank">PHP Cookbook: Solutions & Examples for PHP Programmers</a>', "David Sklar", "14", "Paperback", "978-1449363758", "$40.88"),
		array('<a href="https://www.amazon.com/JavaScript-JQuery-Interactive-Front-End-Development/dp/1118531647/ref=sr_1_1?s=books&ie=UTF8&qid=1487557238&sr=1-1&keywords=9781118531648" target="_blank">JavaScript and JQuery: Interactive Front-End Web Development</a>', "Jon Duckett", "251", "Paperback", "978-1118531648", "$22.09"),
		array('<a href="https://www.amazon.com/Modern-PHP-Features-Good-Practices/dp/1491905018/ref=sr_1_1?s=books&ie=UTF8&qid=1487557275&sr=1-1&keywords=9781491905012" target="_blank">Modern PHP: New Features and Good Practices</a>', "Josh Lockhart", "7", "Paperback", "978-1491905012", "$28.49"),
		array('<a href="https://www.amazon.com/Programming-PHP-Creating-Dynamic-Pages/dp/1449392776" target="_blank">Programming PHP</a>', "Kevin Tatroe", "26", "Paperback", "978-1449392772", "$28.96")
	);

		#$final_price = $books(array_sum[0][5], [1][5], [2][5], [3][5], [4][5], [5][5]); //turned around...


echo "<table>"; //Table with array elements
	echo "<tr>";
		echo "<th>Title</th>";
		echo "<th>Author</th>";
		echo "<th>Pages</th>";
		echo "<th>Format</th>";
		echo "<th>ISBN</th>";
		echo "<th>Price</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>" . $books[0][0] . "</td>";
		echo "<td>" . $books[0][1] . "</td>";
		echo "<td>" . $books[0][2] . "</td>";
		echo "<td>" . $books[0][3] . "</td>";
		echo "<td>" . $books[0][4] . "</td>";
		echo "<td>" . $books[0][5] . "</td>";

	echo "</tr>";
	echo "<tr>";
		echo "<td>" . $books[1][0] . "</td>";
		echo "<td>" . $books[1][1] . "</td>";
		echo "<td>" . $books[1][2] . "</td>";
		echo "<td>" . $books[1][3] . "</td>";
		echo "<td>" . $books[1][4] . "</td>";
		echo "<td>" . $books[1][5] . "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>" . $books[2][0] . "</td>";
		echo "<td>" . $books[2][1] . "</td>";
		echo "<td>" . $books[2][2] . "</td>";
		echo "<td>" . $books[2][3] . "</td>";
		echo "<td>" . $books[2][4] . "</td>";
		echo "<td>" . $books[2][5] . "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>" . $books[3][0] . "</td>";
		echo "<td>" . $books[3][1] . "</td>";
		echo "<td>" . $books[3][2] . "</td>";
		echo "<td>" . $books[3][3] . "</td>";
		echo "<td>" . $books[3][4] . "</td>";
		echo "<td>" . $books[3][5] . "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>" . $books[4][0] . "</td>";
		echo "<td>" . $books[4][1] . "</td>";
		echo "<td>" . $books[4][2] . "</td>";
		echo "<td>" . $books[4][3] . "</td>";
		echo "<td>" . $books[4][4] . "</td>";
		echo "<td>" . $books[4][5] . "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>" . $books[5][0] . "</td>";
		echo "<td>" . $books[5][1] . "</td>";
		echo "<td>" . $books[5][2] . "</td>";
		echo "<td>" . $books[5][3] . "</td>";
		echo "<td>" . $books[5][4] . "</td>";
		echo "<td>" . $books[5][5] . "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>" . "</td>";
		echo "<td>" . "</td>";
		echo "<td>" . "</td>";
		echo "<td>" . "</td>";
		echo "<td>" . "</td>";
			#echo "<td>Your final price is: " . $final_price . "</td>"; //See line 42
	echo "</tr>";

echo "</table>";
?>
<br>
<br>
<h1>Challenge 2: Coin Toss</h1>
<?php
$heads = "<img src='https://webdevdbcourses.prattsi.org/~kdroesch/penny-heads.png' alt='penny heads' height='75' width='75'>"; //print out and HTML img tag for heads up penny
$tails = "<img src='https://webdevdbcourses.prattsi.org/~kdroesch/penny-tails.png' alt='penny tails' height='75' width='75'>"; //print out and HTML img tag for heads up penny
$heads_up_counter = 0;
$flip_counter = 0;
$flip_num = 3; //number of desired flips

function cointoss($flip_num, $heads_up_counter, $flip_counter) { //defining the 'cointoss' function
    echo "<br>You flipped the coin $flip_num times in a row, in $flip_counter flips!";
	}

echo "Let's flip a coin $flip_num times in a row.<br>";
echo "<br>";

while ($heads_up_counter < $flip_num) { //change coin flip number here
    $flip = mt_rand(0,1);
    $flip_counter++;
    if ($flip){
        $heads_up_counter++;
        echo "$heads";
        	}
        else {
            $heads_up_counter = 0;
            echo "$tails";
        	}
        }

echo "<br>";

cointoss($flip_num, $heads_up_counter, $flip_counter); //calling the 'cointoss' function


?>
</body>
</html>