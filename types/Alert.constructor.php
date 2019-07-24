<?php

function Alert($input = ""){
$compiler = "";
$base_class = "alert";
$default = ["content"=> "Content placeholder", "tag"=>"div", "attr" => "", "template" =>"alert-warning fade show", "dismisable"=>true, "style"=> "", "script"=> ""];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
$base_attributes = ["role"=>"alert"];
$compiler .= '<'.$tag.' id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
$compiler .= $content;
if($dismisable){
$compiler .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>';
}
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</$tag>";
return $compiler;
}

?>