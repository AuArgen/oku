<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page for post method</h1>
    <hr>
<?php
        if(isset($_POST["sendNazgul"])) {
            $username = $_POST["at"];
            $email = $_POST["email"];
            echo "<h1>$username</h1>";
            echo "<h1>$email</h1>";
        }
    ?>
</body>
</html>