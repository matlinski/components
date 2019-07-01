<?php

function Alert($json = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "alert";
$default = ["content"=> "placeholder", "tag"=>"div", "attr" => "", "template" =>"alert-warning fade show", "dismisable"=>true, "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($json, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$base_attributes = ["role"=>"alert"];
$compiler .= '<span id="'.$id.'">';
$compiler .= '<'.$tag.' class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
$compiler .= $content;
    #COMPILATION BEGINS#                        
if($dismisable){
$compiler .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>';
    #BUTTON TAG ABOVE#
}
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</$tag>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</span>";
    #COMPILATION ENDS#
return $compiler;
}

?>
<!--<span>
<div class="alert alert-warning fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</span>-->