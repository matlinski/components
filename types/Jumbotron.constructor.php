<?php

function Jumbotron($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "jumbotron";
$default = ["header"=> '<h1 class=\'display-4\'>Header placeholder</h1></br>', "body"=> '<p class=\'lead\'>This is a body placeholder.</p><button class=\'btn btn-primary\'>Take action!</button>', "attr" => "", "template" =>"jumbotron-fluid", "dismisable"=>true, "style"=> '&{background-image: url(\'https://source.unsplash.com/featured/?dark\'); background-size: cover; color: white}', "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$compiler .= '<component id="'.$id.'">';
$compiler .= '<div class="'.$base_class.' '.$template.'" '.$attr.'>';
$compiler .= '<div class="container">';
$compiler .= $header;
$compiler .= $body;
    #COMPILATION BEGINS#
$compiler .= "</div>";
$compiler .= "</div>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>