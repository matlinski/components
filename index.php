
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
<?=Button(["popover"=>true]) ?>
</body>
</html>



























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
<!-- <div class="btn-group"> -->
  <?php # Button(["template"=>"btn-secondary rounded-0"]) ?>
  <?php # Button(["content"=>'Button<span class="sr-only">Toggle Dropdown</span>',"template"=>"btn-secondary rounded-0", "tooltip"=>["An example", "right"]]) ?>
<!-- </div> -->