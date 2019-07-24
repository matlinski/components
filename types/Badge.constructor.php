<?php

function Badge($input = ""){
$compiler = "";
$base_class = "badge";
$default = ["content"=> "Content placeholder", "tag"=>"span", "attr" => "", "template" =>"badge-primary", "style"=> "", "script"=> ""];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
if($tag === "span"){
$compiler .= '<span id="'.$id.'" class="'.$base_class.' '.$template.'" '.$attr.'>'.$content;
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= '</span>';
} elseif($tag === "a"){
$base_attributes = ["href"=>"#"];
$compiler .= '<a id="'.$id.'" '.attr_append($attr, $base_attributes).' class="'.$base_class.' '.$template.'">'.$content;
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= '</a>';
}
return $compiler;
}

?>