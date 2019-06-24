<?php
    require_once("components.php");
    $GLOBALS["bg-color"] = "black";
    $GLOBALS["tx-color"] = "white";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background: black;
        }
    </style>
</head>
<body>
    <?= button('{
        "template": "casual_light",
        "style": {"&": "margin: 50px"}
        }'); ?>
</body>
</html>