<?php
    require_once("components.php");
    
?>
    <!-- $GLOBALS["bg-color"] = "50%, 0%, 0%";
    $GLOBALS["tx-color"] = "100%, 100%, 100%"; -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <style>
        body{
            padding: 0;
            margin: 0;
            background: rgb(50%, 0%, 0%);
        }
    </style> -->
</head>
<body>
    <?= button(["lol"]); ?>
    <?= button(["ads","elegant", "href=\"https://google.com\"", "& a{color: red}"]); ?>
</body>
</html>