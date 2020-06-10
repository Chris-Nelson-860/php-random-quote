<!-- // PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
// Create the getRandomQuuote function and name it getRandomQuote
// Create the printQuote funtion and name it printQuote -->
<?php
$quotes = [
    [
        "quote" => "This is the first quote",
        "source" => "Source 1"
    ],
    [
        "quote" => "This is the second quote",
        "source" => "Source 2"
    ],
    [
        "quote" => "This is the third quote",
        "source" => "Source 3"
    ],
    [
        "quote" => "This is the fourth quote",
        "source" => "Source 4"
    ],
    [
        "quote" => "This is the fifth quote",
        "source" => "Source 5"
    ],
];

//this function returns a random index number from the array used in the argument.  It is how i am making sure that i pick a number that is within the range of elements in the array.

function getRandomQuote($arr){
     return array_rand($arr,1);
}
//The number from getRandomQuote is stored in a variable 
$randomNumber = getRandomQuote($quotes);

//The random number gets used as the index number for the random quote.
function printQuote($arg){
    global $randomNumber;
    echo "<p class=\"quote\">" . $arg[$randomNumber]['quote'] . "</p>";
    echo "<p class=\"source\">" . $arg[$randomNumber]['source'] . "</p>";
}

printQuote($quotes);



?>


