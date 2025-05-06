<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $username = "admin";
    $password = "1234";

    $userNameInput = "admin";
    $passwordInput = "1234";

    if ($username == $userNameInput && $password == $passwordInput) {
        echo "Login Successful";
    } else {
        echo "Invalid username or password";
    }

    //Check if both match, show "Login Successful", otherwise show "Invalid username or password".
    
    ?>
</body>

</html>