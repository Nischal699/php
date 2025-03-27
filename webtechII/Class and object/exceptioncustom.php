<?php
class CustomException extends Exception {}

function checkNumber($number) {
    if ($number > 10) {
        echo "the number is 10 or above 10 ";
    }
    else
    {
        throw new CustomException("The number is too large!");
    }
    
}
try {
    echo checkNumber(15);
} catch (CustomException $e) {
    echo "Caught custom exception: " . $e->getMessage();
}
