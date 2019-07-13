<?php

function Spinner($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "spinner";
$default = ["radius"=>"2rem", "template" =>"spinner-border", "attr" => "", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$compiler .= '<component id="'.$id.'">';
    #COMPILATION BEGINS#       
    $base_attributes = ["role"=>"status"];              
$compiler .= '<div class="spinner '.$template.'" style="width:'.$radius.'; height:'.$radius.'" '.attr_append($attr, $base_attributes).'>
<span class="sr-only">Loading...</span>
</div>';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>