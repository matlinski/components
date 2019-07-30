
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
    ?>
    <script>
</script>
</head>
<body>

<?= Alert()?>
<?= Badge()?>
<?= BreadCrumb()?>
<?= Button(['tag'=>'button'])?>
<?= Button(['tag'=>'input'])?>
<?= Button(['tag'=>'a'])?>
<?= Card()?>
<?= Carousel()?>
<?= Button()?>
<?= Button(['content'=>'dropdown','dropdown'=>Navs(['template'=>'flex-column'])])?>
<?= Input()?>
<?= Jumbotron()?>
<?= Media()?>
<?= Modal()?>
<?= Navs()?>
<?= Navbar()?>
<?= Pagination()?>
<?= Button(['content'=>'popover','popover'=>'test'])?>
<?= Progress()?>
<?= Scrollspy()?>
<?= Spinner()?>
<?= Toast()?>
<?= Button(['content'=>'tooltip','tooltip'=>'test'])?>
</body>
</html>