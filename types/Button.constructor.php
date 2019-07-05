<?php
function Button($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "btn";
$default = ["content"=> "Content placeholder", "tag"=>"button", "attr" => "", "template" =>"btn-primary", "tooltip"=>false, "dropdown"=>false, "popover"=>false,"style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$compiler .= '<span id="'.$id.'">';
if($dropdown){
    if(is_array($dropdown)){
        if(!preg_match("/[<>]+/", $dropdown[count($dropdown)-1])) $compiler .= '<div class="dropdown '.$dropdown[count($dropdown)-1].'">';
        else $compiler .= '<div class="dropdown">';
    } 
    else $compiler .= '<div class="dropdown">';
}
    #COMPILATION BEGINS#                        
if($tag === "button"){
if($tooltip) {
    if(is_array($tooltip)) $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"$tooltip[1]", "title"=>$tooltip[0]];
    else $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>$tooltip];
    $compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
}
else{
    if($dropdown){
        $base_attributes = ["class"=>"dropdown-toggle", "type"=>"submit", "id"=>"dropdownMenuButton", "data-toggle"=>"dropdown", "aria-haspopup"=>"true", "aria-expanded"=>"false"];
        $compiler .= '<button class="'.$base_class.' dropdown-toggle '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
    elseif($popover){
        if(is_array($popover)) $base_attributes = ["data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>$popover[1], "data-content"=>$popover[0]];
        else $base_attributes = ["data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>"top", "data-content"=>$popover];
        $compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
    else {
        $base_attributes = ["type"=>"submit"];
        $compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
}
    #BUTTON TAG ABOVE#
} elseif($tag === "a"){
    if($tooltip){
        if(is_array($tooltip)) $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>$tooltip[1], "title"=>$tooltip[0]];
        else $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>$tooltip];
        $compiler .= '<a class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
    } 
    else{
        if($dropdown){
            $base_attributes = ["class"=>"dropdown-toggle", "href"=>"#", "role"=>"button", "id"=>"dropdownMenuButton", "data-toggle"=>"dropdown", "aria-haspopup"=>"true", "aria-expanded"=>"false"];
            $compiler .= '<a class="'.$base_class.' dropdown-toggle '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
        }
        elseif($popover){
            if(is_array($popover)) $base_attributes = ["href"=>"#", "role"=>"button", "data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>$popover[1], "data-content"=>$popover[0]];
            else $base_attributes = ["href"=>"#", "role"=>"button", "data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>"top", "data-content"=>$popover];
            $compiler .= '<a class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
        }
        else {
            $base_attributes = ["href"=>"#", "role"=>"button"];
            $compiler .= '<a class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
        } #!preg_match("/[<>]+/", $dropdown[count($dropdown)-1])
    }  
    #A TAG ABOVE#
} elseif($tag === "input"){
    if($tooltip){
        if(is_array($tooltip)) $base_attributes = ["type"=>"submit", "value"=>$content, "data-toggle"=>"tooltip", "data-placement"=>"$tooltip[1]", "title"=>$tooltip[0]];
        else $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>$tooltip];
        $compiler .= '<input class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
    } 
    elseif($popover){
        if(is_array($popover)) $base_attributes = ["type"=>"submit", "value"=>$content, "data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>$popover[1], "data-content"=>$popover[0]];
        else $base_attributes = ["type"=>"submit", "value"=>$content, "data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>$popover[1], "data-content"=>$popover[0]];
        $compiler .= '<input class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
    }
    else{
        $base_attributes = ["type"=>"submit", "value"=>$content];
    $compiler .= '<input class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
    } 
    #INPUT TAG ABOVE#
}

if($dropdown){
    if(is_array($dropdown)){
        $drop_compilator = "";
        $i = 0;
        foreach ($dropdown as $value) {
            if($i < (count($dropdown)-1) && !preg_match("/[<>]+/", $dropdown[count($dropdown)-1])){
                $drop_compilator .= $value;
                $i++;
            } elseif($i <= (count($dropdown)-1) && preg_match("/[<>]+/", $dropdown[count($dropdown)-1])){
                $drop_compilator .= $value;
                $i++;
            }
            else break;
        }
        $compiler .= '<div class="dropdown-menu">'.$drop_compilator.'</div>';
    }
    else $compiler .= '<div class="dropdown-menu">'.$dropdown.'</div>';
} 
if($dropdown){
    $compiler .='</div>';
    $style .= '#'.$id.'>.dropdown>.dropdown-menu>*{
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }';
} 
if($script) $compiler .= "<script>$script</script>";
if($style) $compiler .= "<style>$style</style>";
    #OPTIONAL STYLE AND SCRIPT ABOVE#
$compiler .= "</span>";
    #COMPILATION ENDS#
return $compiler;
}

?>