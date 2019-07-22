<?php

function Navs($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "nav";
$default = ["content"=> ['<a href=\'home.html\'>home</a>', '<a href=\'about.html\'>About us</a>', '<a href=\'contact.html\'>Contact</a>'],'active'=> 1, "attr" => "", "template" =>"justify-content-end", "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE# 
$base_attributes = [];

$compiler .= '<component id="'.$id.'">';
$compiler .= '<ul class="'.$base_class.' '.$template.'" '.$attr.'>';
$content_compiler = "";
if(is_array($content)){
    $i = 1;
    foreach($content as $value){
        $value = explode('href=', $value);
        if($i === $active){
            $value[0] .= 'class ="nav-link active" ';
        } else{
            $value[0] .= 'class ="nav-link" ';
        }
        $value = implode('href=', $value);
        if($i === (count($content)) )$content_compiler .= '<li class="nav-item">'.$value.'</li>';
        else $content_compiler .= '<li class="nav-item">'.$value.'</li>';
        $i++;
    }
    $compiler .= $content_compiler;
} else {
    $content_compiler .= 'Please set the content as an array';
    $compiler .= $content_compiler;
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