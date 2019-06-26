
    <!-- $GLOBALS["bg-color"] = "50%, 0%, 0%";
    $GLOBALS["tx-color"] = "100%, 100%, 100%"; -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    require_once("Library.php");
    info();
    ?>
</head>
<body>
    <?= button(); ?>
    <?= button('{"template":"fun_red", "attr": {"href":"https://google.com"}}'); ?>
    <?= button(["ads","elegant", "id=\"btn0\" class=\"btn0\"", "&>.btn_link:visited{color:red;}"]); ?>
</body>
</html>