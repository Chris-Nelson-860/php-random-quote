// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
// Create the getRandomQuuote function and name it getRandomQuote
// Create the printQuote funtion and name it printQuote
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

function getRandomQuote($arr){
    $randomNumber = array_rand($arr,1);
    echo $randomNumber;
}
 

?>


