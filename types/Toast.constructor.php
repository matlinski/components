<?php

function Toast($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "toast";
$default = ["header"=> '<img src=\'https://picsum.photos/20/20\' class=\'rounded mr-2\' alt=\'Alt placeholder\'><strong class=\'mr-auto\'>Title example</strong><small>11 mins ago</small>', "body"=> 'Body placeholder', "attr" => "", "template" =>"", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$script .= '$(document).ready(function(){
  $(\'.toast\').toast(\'show\');
});';
$base_attributes = ["data-autohide"=>"false", "role"=>"alert", "aria-live"=>"assertive", "aria-atomic"=>"true"];
$compiler .= '<component id="'.$id.'">';
$compiler .= '<div class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
$compiler .= '<div class="toast-header">';
$compiler .= $header;
$compiler .= '<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>';
$compiler .= '</div>';
$compiler .= '<div class="toast-body">';
$compiler .= $body;
$compiler .= '</div>';
$compiler .= '</div>';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>
