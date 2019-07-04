<?php

function Badge($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "badge";
$default = ["content"=> "placeholder", "tag"=>"span", "attr" => "", "template" =>"badge-primary", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$compiler .= '<span id="'.$id.'">';
    #COMPILATION BEGINS#                        
if($tag === "span"){
$compiler .= '<span class="'.$base_class.' '.$template.'" '.$attr.'>'.$content.'</span>';
    #SPAN TAG ABOVE#
} elseif($tag === "a"){
$base_attributes = ["href"=>"#"];
$compiler .= '<a '.attr_append($attr, $base_attributes).' class="'.$base_class.' '.$template.'">'.$content.'</a>';
    #A TAG ABOVE#
}
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</span>";
    #COMPILATION ENDS#
return $compiler;
}

?>