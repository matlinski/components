<?php
function Button($json = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "btn";
$default = ["content"=> "placeholder", "tag"=>"button", "attr" => "", "template" =>"btn-primary", "tooltip"=>false, "dropdown"=>false, "style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($json, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$compiler .= '<span id="'.$id.'">';
if($dropdown) $compiler .= '<div class="dropdown '.$dropdown[count($dropdown)-1].'">';
    #COMPILATION BEGINS#                        
if($tag === "button"){
if($tooltip) {
    if(is_array($tooltip)) $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"$tooltip[1]", "title"=>$tooltip[0]];
    else $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>$tooltip];
    $compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
}
else{
    if($dropdown){
        $base_attributes = ["type"=>"submit", "id"=>"dropdownMenuButton", "data-toggle"=>"dropdown", "aria-haspopup"=>"true", "aria-expanded"=>"false"];
        $compiler .= '<button class="'.$base_class.' dropdown-toggle '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
    else {
        $base_attributes = ["type"=>"submit"];
        $compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
}
    #BUTTON TAG ABOVE#
} elseif($tag === "a"){
    if($tooltip){
        if(is_array($tooltip)) $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"$tooltip[1]", "title"=>$tooltip[0]];
        else $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>$tooltip];
        $compiler .= '<a class="'.$base_class.' '.$template.'" '.$attr_append($attr, $base_attributes).'>'.$content.'</a>';
    } 
    else{
        if($dropdown){
            $base_attributes = ["href"=>"#", "type"=>"submit", "id"=>"dropdownMenuButton", "data-toggle"=>"dropdown", "aria-haspopup"=>"true", "aria-expanded"=>"false"];
            $compiler .= '<a class="'.$base_class.' dropdown-toggle '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
        }
        else {
            $base_attributes = ["href"=>"#", "role"=>"button"];
            $compiler .= '<a class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
        }
    }  
    #A TAG ABOVE#
} elseif($tag === "input"){
    if($tooltip) $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>$tooltip];
    else $base_attributes = ["type"=>"submit", "value"=>$content];
    $compiler .= '<input class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
    #INPUT TAG ABOVE#
}

if($dropdown){
    if(is_array($dropdown)){
        $drop_compilator = "";
        $i = 0;
        foreach ($dropdown as $value) {
            if($i < (count($dropdown)-1)){
                $drop_compilator .= $value;
                $i++;
            }
            else break;
        }
        $compiler .= '<div class="dropdown-menu">'.$drop_compilator.'</div>';
    }
    else $compiler .= '<div class="dropdown-menu">'.$dropdown.'</div>';
} 
if($dropdown) $compiler .='</div>';
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</span>";
    #COMPILATION ENDS#
return $compiler;
}

?>