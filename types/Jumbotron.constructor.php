<?php

function Jumbotron($input = ""){
$compiler = "";
$base_class = "jumbotron";
$default = ["header"=> '<h1 class=\'display-4\'>Header placeholder</h1></br>', "body"=> '<p class=\'lead\'>This is a body placeholder.</p><button class=\'btn btn-primary\'>Take action!</button>', "attr" => "", "template" =>"jumbotron-fluid", "style"=> '&{background-image: url(\'https://source.unsplash.com/featured/?dark\'); background-size: cover; color: white}', "script"=> ""];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
$base_attributes =[];
$compiler .= '<div id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
$compiler .= '<div class="container">';
$compiler .= $header;
$compiler .= $body;
$compiler .= "</div>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</div>";
return $compiler;
}

?>