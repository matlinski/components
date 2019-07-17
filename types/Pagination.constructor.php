<?php

function Pagination($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "pagination";
$default = ["links"=> ['#id1','#id2', '#id3'], "active"=>2, "interface"=>["previous", "next"], "attr" => "", "template" =>"justify-links-left", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$base_attributes = [];

$compiler .= '<component id="'.$id.'">';
$compiler .= '<ul class="'.$base_class.' '.$template.'" '.$attr.'>';
$links_compiler = "";
if(is_array($links)){
    $i = 1;
    if($interface){
        if($i == $active){
            if(is_array($interface)) $links_compiler .= '<li class="page-item disabled"><a class="page-link">'.$interface[0].'</a></li>';
            else $links_compiler .= '<li class="page-item disabled"><a class="page-link" >previous</a></li>';
        } else{
            if(is_array($interface)) $links_compiler .= '<li class="page-item"><a class="page-link" href="'.$links[$active-2].'">'.$interface[0].'</a></li>';
            else $links_compiler .= '<li class="page-item"><a class="page-link" href="'.$links[$active-2].'">previous</a></li>';
        }
    } 
    foreach($links as $value){
        if($i == $active) $links_compiler .= '<li class="page-item active"><a class="page-link" href="'.$value.'">'.$i.'</a></li>';
        else $links_compiler .= '<li class="page-item"><a class="page-link" href="'.$value.'">'.$i.'</a></li>';
        $i++;
    }
    if($interface){
        if($i == $active+1){
            if(is_array($interface)) $links_compiler .= '<li class="page-item disabled"><a class="page-link">'.$interface[1].'</a></li>';
            else $links_compiler .= '<li class="page-item disabled"><a class="page-link">next</a></li>';
        } else{
            if(is_array($interface)) $links_compiler .= '<li class="page-item"><a class="page-link" href="'.$links[$active].'">'.$interface[1].'</a></li>';
            else $links_compiler .= '<li class="page-item"><a class="page-link" href="'.$links[$active].'">next</a></li>';
        }
    } 
    $compiler .= $links_compiler;
} else {
    $links_compiler .= 'Please set the links as an array';
    $compiler .= $links_compiler;
}
    #COMPILATION BEGINS#
$compiler .= "</ul>";
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
$compiler .= "</component>";
    #COMPILATION ENDS#
return $compiler;
}

?>