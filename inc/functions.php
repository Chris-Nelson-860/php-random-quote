<!-- // PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
// Create the getRandomQuuote function and name it getRandomQuote
// Create the printQuote funtion and name it printQuote -->
<?php
$quotes = [
    [
        "quote" => "You can fail at what you don’t want, so you might as well take a chance on doing what you love.",
        "source" => "Jim Carrey"
    ],
    [
        "quote" => "Desperation is a necessary ingredient to learning anything or creating anything.  Period.  If you ain’t desperate at some point, you ain’t interesting.",
        "source" => "Jim Carrey"
    ],
    [
        "quote" => "Money and success don’t change people; they merely amplify what is already there",
        "source" => "Will Smith"
    ],
    [
        "quote" => "If you’re not failing, you’re not pushing your limits, and if you’re not pushing your limits, you’re not maximizing your potential",
        "source" => "Ray Dalio"
    ],
    [
        "quote" => "I learned that if you work hard and creatively, you can have just about anything you want, but not everything you want. Maturity is the ability to reject good alternatives in order to pursue even better ones",
        "source" => "Ray Dalio"
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


