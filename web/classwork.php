<!DOCTYPE html>
<html>
<head>
	<title>php basic</title>
	<style>
		header{
			background: lightblue;
			text-align: center;
			border-style: dotted;
		}
		footer{
	       position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           background-color: lightblue;
           color: white;
           text-align: center;
		}
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>Web Engineering Online Class</h1>
	</header>
<?php
$a = "I love";                                           //global veriable
$b = "Class work";                                       //string
$c = 10;                                                 //integer
$d = 23;
$e = 25.4;                                               //float
$topics = array("HTML","CSS","JS","PHP");                //array
echo "$a $b <br>";                                       //concatenate two string variable 
$f = $c + $d;                                            //add two integer variable 
echo "The sum of two integer variable is $f<br>";
$f = $d - $c;
echo "The substruction of two integer variable is $f<br>";
echo "Lenght of string variable b is ".strlen($b);       //string length calculate
echo "Number of word in a sting ".str_word_count($a);    //count number of word in a string
echo "Reverse of 'I love' is ".strrev($a)."<br>";               //reverse a string
if ($d < "20") {                                         //if else condition
    echo "Variable is greater than 20!<br>";
} else {
    echo "Variable is less than 20!<br>";
}
for ($i=0; $i <3 ; $i++) {                              //for loop
	echo "Use For Loop for $i time!<br>";
}
foreach ($topics as $value) {                           //foreach loop
	echo $value."<br>";
}

function calculation(){                                 //function creation
	$a = 10;                                            //local variable
	$a+=10;
	echo "$a<br>";
}
calculation();                                          //function call

var_dump($topics);                                      //array element show
?>

<footer>
	<P>This is assignment of Web Engineering Class</P>
</footer>
</body>
</html>