<?php
function Button($input = ""){
    #USER INPUT ABOVE#
$compiler = "";
$base_class = "btn";
$default = ["content"=> "Content placeholder", "tag"=>"button", "attr" => "", "template" =>"btn-primary", "tooltip"=>false, "dropdown"=>false, "popover"=>false, "collapse"=>false,"style"=> "", "script"=> ""];
    #PRESETS ABOVE#
foreach(Component($input, $default, $base_class) as $key => $value) $$key = $value;
    #DATA SUPPLY ABOVE#
$secondary_id = 'trigger';
$id_supply = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'q', 'w', 'e', 'r', 't', 'y', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'];
for($i = 0; $i < 5; $i++){
    $secondary_id .= $id_supply[rand(0, (count($id_supply) - 1) )];
}
if($popover){
    $script .= '$(function () {
        $(\'[data-toggle="popover"]\').popover()
      })';
}
if($tooltip){
    $script .= '$(function () {
        $(\'[data-toggle="tooltip"]\').tooltip()
      })';
}
if(!$collapse){
    $compiler .= '<component id="'.$id.'">';
}
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
    elseif($dropdown){
        $base_attributes = ["class"=>"dropdown-toggle", "type"=>"submit", "id"=>"dropdownMenuButton", "data-toggle"=>"dropdown", "aria-haspopup"=>"true", "aria-expanded"=>"false"];
        $compiler .= '<button class="'.$base_class.' dropdown-toggle '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
    elseif($popover){
        if(is_array($popover)) $base_attributes = ["data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>$popover[1], "data-content"=>$popover[0]];
        else $base_attributes = ["data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>"top", "data-content"=>$popover];
        $compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
    elseif($collapse){
        $base_attributes = ["type"=>"button", "data-toggle"=>"collapse", "data-target"=>'#'.$secondary_id, "aria-expanded"=>"false", "aria-controls"=>'#'.$secondary_id];
        $compiler .= '<button id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
    else {
        $base_attributes = ["type"=>"submit"];
        $compiler .= '<button class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</button>';
    }
    #BUTTON TAG ABOVE#
} elseif($tag === "a"){
    if($tooltip){
        if(is_array($tooltip)) $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>$tooltip[1], "title"=>$tooltip[0]];
        else $base_attributes = ["type"=>"submit", "data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>$tooltip];
        $compiler .= '<a class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
    }
    elseif($dropdown){
        $base_attributes = ["class"=>"dropdown-toggle", "href"=>"#", "role"=>"button", "id"=>"dropdownMenuButton", "data-toggle"=>"dropdown", "aria-haspopup"=>"true", "aria-expanded"=>"false"];
        $compiler .= '<a class="'.$base_class.' dropdown-toggle '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
    }
    elseif($popover){
        if(is_array($popover)) $base_attributes = ["href"=>"#", "role"=>"button", "data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>$popover[1], "data-content"=>$popover[0]];
        else $base_attributes = ["href"=>"#", "role"=>"button", "data-container"=>"body", "data-toggle"=>"popover", "data-placement"=>"top", "data-content"=>$popover];
        $compiler .= '<a class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
    }
    elseif($collapse){
        $base_attributes = ["data-toggle"=>"collapse", "href"=>'#'.$secondary_id, "role"=>"button", "aria-expanded"=>"false", "aria-controls"=>'#'.$secondary_id];
        $compiler .= '<a id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
    }
    else {
        $base_attributes = ["href"=>"#", "role"=>"button"];
        $compiler .= '<a class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>'.$content.'</a>';
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
if($collapse){
    $compiler .= '<div class="collapse navbar-collapse" id="'.$secondary_id.'">
        '.$collapse.'
    </div>';
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
if(!$collapse){
    $compiler .= "</component>";
}
    #COMPILATION ENDS#
return $compiler;
}

?>