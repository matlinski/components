
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
</head>
<body>
<?php #Alert('{"content": "There is a close button","tag": "h1","attr": "onclick=\"test()\"","template": "alert-success","dismisable": true,"style": {"&": "padding: 20px"},"script": "function test(){alert(\"lol\")}"}')?>
<?php #Alert(["There is a close button", "h1", "onclick=\"test()\"", "alert-success", true, ["&" => "padding: 20px"], "function test(){alert(\"lol\")}"])?>
<?php /* Alert([
    button(["You've got message".Badge([534535, "span", "", "badge-danger"]), "button", "href=\"https://google.com\"", "btn-secondary"]), 
    "h1", 
    ["onclick"=> "test()", "test"=>"test2"],
     "alert-success", false, "&{padding: 20px}",
     "function test(){alert(\"lol\")}"]) */?>
     <?php #Progress([time()%60, 0, 60, "progress-bar-striped progress-bar-animated"])?>
     <?php # Spinner(["5em", "spinner-grow text-success"]);?>
     <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>