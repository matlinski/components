<?php

function Progress($input = ""){
$compiler = "";
$base_class = "progress";
$default = ["progress" => 25,"min"=> 0, "max"=>100, "template" =>"bg-success","attr"=>"", "style"=> "", "script"=> ""];
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
$compiler .= '<component id="'.$id.'">';
$compiler .= '<div class="progress" style="width: '.$max.'%">';
$compiler .= '<div class="progress-bar '.$template.'" role="progressbar" aria-valuenow="'.$progress.'" aria-valuemin="'.$min.'" aria-valuemax="'.$max.'" style="width: '.($progress/$max*100).'%">'.$progress.'%</div>';
$compiler .= '</div>';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</component>";
return $compiler;
}

?>
