<?php

function Spinner($json = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "spinner";
$default = ["radius"=>"2rem", "template" =>"spinner-border", "attr" => "", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($json, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$compiler .= '<span id="'.$id.'">';
    #COMPILATION BEGINS#                        
$compiler .= '<div class="spinner '.$template.'" style="width:'.$radius.'; height:'.$radius.'" role="status">
<span class="sr-only">Loading...</span>
</div>';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</span>";
    #COMPILATION ENDS#
return $compiler;
}

?>
<!-- <div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div> -->