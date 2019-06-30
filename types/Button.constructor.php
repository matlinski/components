<?php

function Button($json = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "btn";
$default = ["content"=> "placeholder", "tag"=>"button", "attr" => "", "template" =>"btn-primary", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($json, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$compiler .= '<span id="'.$id.'">';
    #COMPILATION BEGINS#                        
if($tag === "button"){
$base_attributes = ["type"=>"submit"];
$compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    #BUTTON TAG ABOVE#
} elseif($tag === "a"){
$base_attributes = ["href"=>"#", "role"=>"button"];
$compiler .= '<a class="'.$base_class.' '.$template.'" '.$attr.'>'.$content.'</a>';
    #A TAG ABOVE#
} elseif($tag === "input"){
$base_attributes = ["type"=>"submit", "value"=>$content];
$compiler .= '<input class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
    #INPUT TAG ABOVE#
}
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</span>";
    #COMPILATION ENDS#
return $compiler;
}

?>