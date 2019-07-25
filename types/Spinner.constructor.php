<?php

function Spinner($input = ""){
$compiler = "";
$base_class = "spinner";
$default = [
                "radius"    =>  "2rem",
                "template"  =>  "spinner-border",
                "attr"      =>  "",
                "style"     =>  "",
                "script"    =>  ""
            ];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    $base_attributes = ["role"=>"status"];              
$compiler .= '<div id="'.$id.'" class="spinner '.$template.'" style="width:'.$radius.'; height:'.$radius.'" '.attr_append($attr, $base_attributes).'>
<span class="sr-only">Loading...</span>';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= '</div>';
return $compiler;
}

?>