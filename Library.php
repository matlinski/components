<?php
require_once("info.php");
require_once("Component.php");

function Button($json = ""){
                        #USER INPUT ABOVE#
    $compiler = "";
    $base_class = "btn";
    $default = ["content"=> "placeholder", "tag"=>"button", "template" =>"btn-primary", "attr" => "", "style"=> "", "script"=> ""];
                        #PRESETS ABOVE#
    foreach(Component($json, $default, $base_class) as $key => $value) $$key = $value;
                        #DATA SUPPLY ABOVE#
    $compiler .= "<span>";
    if($tag === "button"){
        $base_attributes = ["type"=>"submit"];
        //$compiler .= "<a class=\"btn_link $user_class\" $attr >{$content}</a>";
        $compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    } elseif($tag === "a"){
        $compiler .= '<a class="'.$base_class.' '.$template.'" href="#" role="button" '.$attr.'>'.$content.'</a>';
    } elseif($tag === "input"){
        $compiler .= '<input class="'.$base_class.' '.$template.'" type="submit" value="'.$content.'" '.$attr.'>';
    }
    if($script) $compiler .= "<script>$script</script>";
    if($style) $compiler .= "<style>$style</style>";
    $compiler .= "</span>";



    
    
    
    
    
                        #COMPILATION ABOVE#
    return $compiler;          

    }

?>