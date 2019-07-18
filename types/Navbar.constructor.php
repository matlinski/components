<?php

function Navbar($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "navbar";
$default = ["content"=> '<h1 class=\'navbar-brand\'>Content placeholder</h1>', "attr" => "", "template" =>"navbar-light bg-light", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$compiler .= '<component id="'.$id.'">';
$compiler .= '<nav class="'.$base_class.' '.$template.'" '.$attr.'>';
$compiler .= $content;
    #COMPILATION BEGINS#                        
$compiler .= "</nav>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
#OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>