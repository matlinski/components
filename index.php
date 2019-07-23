
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
$('body').scrollspy({ target: '#navbar-example' })
</script>
</head>
<body>
<?= Navbar([
  'content'=>'<h1 class="navbar-brand">Brand logo</h1>'.
  button([
      "content"=>"<span class=' navbar-toggler-icon'></span>",
      "template"=>"navbar-expand-lg navbar-light bg-light d-lg-none", 
      "collapse"=>navs(["template"=>"flex-lg-row flex-column"])
    ]),
  "template"=>"navbar-expand-lg navbar-light bg-light"])?>
<?= Carousel(["controls"=>true, "indicators"=>true])?></br>
<div class="container">
    <div class="row d-flex justify-content-around">
        <?= Card(["global"=>"col-lg-4 col-md-6"])?>
        <?= Card(["global"=>"col-lg-4 col-md-6"])?>
        <?= Card(["global"=>"col-lg-4 col-md-6"])?>
    </div>
    <?= Media()?>
    <?= Media(["reverse"=>true])?>
    <?= Media(["template"=>"mb-5"])?>
  </div>
  <footer class="container-fluid py-3 mt-3 bg-dark">
      <div class="row col-9 mx-auto d-flex justify-content-between">
          <p class="text-light">© 2017-2018 Company, Inc. · <a class="text-info" href="#">Privacy</a> · <a class="text-info" href="#">Terms</a></p>
          <p ><a class="text-info" href="#">Back to top</a></p>
      </div>
  </footer>
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