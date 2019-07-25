<?php

function Progress($input = ""){
$compiler = "";
$base_class = "progress";

$default = [
                "progress"  =>  25,
                "min"       =>  0,
                "max"       =>  100,
                "template"  =>  "bg-success",
                "attr"      =>  "",
                "style"     =>  "",
                "script"    =>  ""
            ];
            
foreach(Component($input, $default, $base_class) as $key => $value){
    $$key = $value;
}

$base_attributes = [];
$compiler .= '<div id="'.$id.'" class="'.$base_class.'" style="width: '.$max.'%" '.attr_append($attr, $base_attributes).'>';
$compiler .= '<div class="progress-bar '.$template.'" role="progressbar" aria-valuenow="'.$progress.'" aria-valuemin="'.$min.'" aria-valuemax="'.$max.'" style="width: '.($progress/$max*100).'%">'.$progress.'%</div>';

if($script){
        $compiler .= "<script>$script</script>";
} 

if($style){
        $compiler .= "<style>$style</style>";
} 
$compiler .= '</div>';
return $compiler;
}

?>
