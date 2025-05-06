<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<?php

// Project One
//Show output like: "The number -4 is Negative and Even".
$number = 10;
if ($number > 0 && $number % 2 == 0) {
    echo "The number $number is  positive and Even";
    echo "</br>";
} else if ($number > 0 && $number % 2 != 0) {
    echo "The number $number is  positive and Odd";
    echo "</br>";
} else if ($number < 0 && $number % 2 == 0) {
    echo "The number $number is  negative and Even";
    echo "</br>";
} else if ($number < 0 && $number % 2 != 0) {
    echo "The number $number is  negative and Odd";
    echo "</br>";
} else {
    echo "The number is Zero";
}

?>

</body>

</html>