<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /* Make a PHP script to calculate the electricity bill based on the number of units entered.
    If units are less than or equal to 50: bill = units * 3.50
    If units are less than or equal to 100: bill = 50 * 3.50 + (units - 50) * 4.00
    If units are less than or equal to 200: bill = 50 * 3.50 + 50*  4.00 + (units - 100) * 5.20
    If units are more than 200 means else case: bill = 50* 3.50 + 50 * 4.00 + 100 * 5.20 + (units - 200) * 6.50
    Show the total amount clearly with a message. */
    $units = 30;
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 3.50;
    } else if ($units <= 100) {
        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } else if ($units <= 200) {
        $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $bill = 50 * 3.50 + 50 * 4.00 + 100 * 5.20 + ($units - 200) * 6.50;
    }

    echo "User  " . $units . "  units used </br> and this bill is " . $bill . "Taka";


    ?>

</body>

</html>