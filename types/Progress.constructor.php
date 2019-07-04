<?php

function Progress($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "progress";
$default = ["progress" => 25,"min"=> 0, "max"=>100, "template" =>"bg-success","attr"=>"", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$compiler .= '<span id="'.$id.'">';
$compiler .= '<div class="progress" style="width: '.$max.'%">';
    #COMPILATION BEGINS#                        
$compiler .= '<div class="progress-bar '.$template.'" role="progressbar" aria-valuenow="'.$progress.'" aria-valuemin="'.$min.'" aria-valuemax="'.$max.'" style="width: '.($progress/$max*100).'%">'.$progress.'%</div>';
$compiler .= '</div>';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</span>";
    #COMPILATION ENDS#
return $compiler;
}

?>
<!-- <div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div> -->