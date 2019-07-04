
    <!-- $GLOBALS["bg-color"] = "50%, 0%, 0%";
    $GLOBALS["tx-color"] = "100%, 100%, 100%"; -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <?php
    require_once("Library.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})</script>
</head>
<body>
<?php #Alert('{"content": "There is a close button","tag": "h1","attr": "onclick=\"test()\"","template": "alert-success","dismisable": true,"style": {"&": "padding: 20px"},"script": "function test(){alert(\"lol\")}"}')?>
<?php #Alert(["There is a close button", "h1", "onclick=\"test()\"", "alert-success", true, ["&" => "padding: 20px"], "function test(){alert(\"lol\")}"])?>
<?php /* Alert([
    button(["You've got message".Badge([534535, "span", "", "badge-danger"]), "button", "href=\"https://google.com\"", "btn-secondary"]), 
    "h1", 
    ["onclick"=> "test()", "test"=>"test2"],
     "alert-success", true, "&{padding: 20px}",
     "function test(){alert(\"lol\")}"]) ?>
     <?php #Progress([time()%60, 0, 60, "progress-bar-striped progress-bar-animated"])?>
     <?=  Spinner(); */?>
<?php # Alert("lol"); ?>
<?php #Alert([Button(["New messages".Badge([5]), "button", ["data-toggle"=>"tooltip", "data-placement"=>"right", "title"=>"Tooltip on right"]])]) ?>
<?php # Button('{"content":"Main menu","dropdown": "<a class=\"dropdown-item\" href=\"./main.php\">Home</a>", "tag": "button"}') ?>
<div class="btn-group">
  <?= Button(["template"=>"btn-secondary"]) ?>
  <?= Button(["content"=>'<span class="sr-only">Toggle Dropdown</span>',"template"=>"btn-secondary dropdown-toggle dropdown-toggle-split"]) ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>