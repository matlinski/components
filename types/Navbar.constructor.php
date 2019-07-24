<?php

function Navbar($input = ""){
$compiler = "";
$base_class = "navbar";
$default = ["content"=> '<h1 class=\'navbar-brand\'>Content placeholder</h1>', "attr" => "", "template" =>"navbar-light bg-light", "style"=> "", "script"=> ""];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
$compiler .= '<component id="'.$id.'">';
$compiler .= '<nav class="'.$base_class.' '.$template.'" '.$attr.'>';
$compiler .= $content;
$compiler .= "</nav>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</component>";
return $compiler;
}

?>