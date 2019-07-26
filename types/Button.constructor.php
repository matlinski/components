<?php
function Button($input = "") {
$base_class = "btn";

$default = [
                "content"   =>  "Content placeholder",
                "tag"       =>  "button",
                "attr"      =>  "",
                "template"  =>  "btn-primary",
                "tooltip"   =>  false,
                "dropdown"  =>  false,
                "popover"   =>  false,
                "collapse"  =>  false,
                "style"     =>  "",
                "script"    =>  ""
            ];

foreach(Component($input, $default, $base_class) as $key => $value) {
    $$key = $value;
}

if ($collapse) {
    $secondary_id = 'trigger';
    $id_supply = ['0', '1', '2', '3', '4', '5', '6', '7', '8',
    '9', 'q', 'w', 'e', 'r', 't', 'y', 'i', 'o', 'p', 'a', 's',
    'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b',
    'n', 'm', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P',
    'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C',
    'V', 'B', 'N', 'M'];

    for($i = 0; $i < 5; $i++) {
        $secondary_id .= $id_supply[rand(0, (count($id_supply) - 1) )];
    }
}

if ($popover) {
    $script .= 
    '$(function () {
        $(\'[data-toggle="popover"]\').popover()
    })';
}

if ($tooltip) {
    $script .= 
    '$(function () {
        $(\'[data-toggle="tooltip"]\').tooltip()
    })';
}
$compiler = "";

if ($dropdown) {
    $compiler .='</div>';
    $style .= 
    '#'.$id.'.'.$base_class.'>.dropdown>.dropdown-menu>*{
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

if ($dropdown) {

    if (is_array($dropdown)) {

        if (!preg_match("/[<>]+/", $dropdown[count($dropdown)-1])) {
           $compiler .= '<div class="dropdown '.$dropdown[count($dropdown)-1].'">'; 

        }   else  {
           $compiler .= '<div class="dropdown">'; 
        }

    }   else  {
       $compiler .= '<div class="dropdown">'; 
    }
}

if ($tag === "button") {
    $compiler .= '<button id="'.$id.'" class="'.$base_class.' '.$template.'"';

    if ($tooltip) {

        if (is_array($tooltip)) {
            $base_attributes =  [
                                    "type"          =>  "submit",
                                    "data-toggle"   =>  "tooltip",
                                    "data-placement"=>  "$tooltip[1]",
                                    "title"         =>  $tooltip[0]
                                ];

        }   else    {
            $base_attributes = [
                                    "type"          =>  "submit",
                                    "data-toggle"   =>  "tooltip",
                                    "data-placement"=>  "top",
                                    "title"         =>  $tooltip
                                ];
        }
        $compiler .= attr_append($attr, $base_attributes).'>';

    }   elseif ($dropdown)   {

        $base_attributes = [
                                "class"         =>  "dropdown-toggle",
                                "type"          =>  "submit",
                                "id"            =>  "dropdownMenuButton",
                                "data-toggle"   =>  "dropdown",
                                "aria-haspopup" =>  "true",
                                "aria-expanded" =>  "false"
                            ];
        $compiler .= attr_append($attr, $base_attributes).'>';

    }   elseif ($popover)    {
        
        if (is_array($popover)) {
            $base_attributes =      [
                                        "data-container"    =>  "body",
                                        "data-toggle"       =>  "popover",
                                        "data-placement"    =>  $popover[1],
                                        "data-content"      =>  $popover[0]
                                    ];

        }   else    {
            $base_attributes = [
                                    "data-container"    =>  "body",
                                    "data-toggle"       =>  "popover",
                                    "data-placement"    =>  "top",
                                    "data-content"      =>  $popover
                                ];
        }
        $compiler .= attr_append($attr, $base_attributes).'>';

    }   elseif ($collapse)   {
        $base_attributes = [
                                "type"          =>  "button",
                                "data-toggle"   =>  "collapse",
                                "data-target"   =>  '#'.$secondary_id,
                                "aria-expanded" =>  "false",
                                "aria-controls" =>  '#'.$secondary_id
                            ];
        $compiler .= attr_append($attr, $base_attributes).'>';
        
    }   else    {
        $base_attributes = [
                                "type"=>"submit"
                            ];
        $compiler .= attr_append($attr, $base_attributes).'>';
    }
    $compiler .= $content;

    if ($script) {
        $compiler .= "<script>$script</script>";
    }

    if ($style) {
        $compiler .= "<style>$style</style>";
    }
    $compiler .= '</button>';

}   elseif ($tag === "a")  {
    $compiler .= '<a id="'.$id.'" class="'.$base_class.' '.$template.'" ';

    if ($tooltip) {

        if (is_array($tooltip)) {
            $base_attributes = [
                                    "type"          =>  "submit",
                                    "data-toggle"   =>  "tooltip",
                                    "data-placement"=>  $tooltip[1],
                                    "title"         =>  $tooltip[0]
                                ];

        }   else    {
            $base_attributes = [
                                    "type"          =>  "submit",
                                    "data-toggle"   =>  "tooltip",
                                    "data-placement"=>  "top",
                                    "title"         =>  $tooltip
                                ];
        } 
        $compiler .= attr_append($attr, $base_attributes).'>';

    }   elseif ($dropdown)   {
        $base_attributes = [
                                "class"         =>  "dropdown-toggle",
                                "href"          =>  "#",
                                "role"          =>  "button",
                                "id"            =>  "dropdownMenuButton",
                                "data-toggle"   =>  "dropdown",
                                "aria-haspopup" =>  "true",
                                "aria-expanded" =>  "false"
                            ];
        $compiler .= attr_append($attr, $base_attributes).'>';

    }   elseif ($popover)    {

        if (is_array($popover)) {
            $base_attributes =   [
                                    "href"          =>  "#",
                                    "role"          =>  "button",
                                    "data-container"=>  "body",
                                    "data-toggle"   =>  "popover",
                                    "data-placement"=>  $popover[1],
                                    "data-content"  =>  $popover[0]
                                ];

        }   else    {
            $base_attributes = [
                                    "href"          =>  "#",
                                    "role"          =>  "button",
                                    "data-container"=>  "body",
                                    "data-toggle"   =>  "popover",
                                    "data-placement"=>  "top",
                                    "data-content"  =>  $popover
                                ];
        }
        $compiler .= attr_append($attr, $base_attributes).'>';

    }   elseif ($collapse)   {
        $base_attributes = [
                                "data-toggle"   =>  "collapse",
                                "href"          =>  '#'.$secondary_id,
                                "role"          =>  "button",
                                 "aria-expanded"=>  "false",
                                 "aria-controls"=>  '#'.$secondary_id
                            ];
        $compiler .= attr_append($attr, $base_attributes).'>';
        
    }   else    {
        $base_attributes =  [
                                "href"  =>  "#",
                                "role"  =>  "button"
                            ];
        $compiler .= attr_append($attr, $base_attributes).'>';
    }
    $compiler .= $content;

    if ($script) {
        $compiler .= "<script>$script</script>";
    } 

    if ($style) {
        $compiler .= "<style>$style</style>";
    } 
    $compiler .= '</a>';

} elseif ($tag === "input")  {

    $compiler .= '<div id="'.$id.'" class="input-group" style="width:auto">';
    $compiler .= '<input class="'.$base_class.' '.$template.'" ';

    if ($tooltip) {

        if (is_array($tooltip)) {
            $base_attributes =  [
                                    "type"          =>  "submit",
                                    "value"         =>  $content,
                                    "data-toggle"   =>  "tooltip",
                                    "data-placement"=>  "$tooltip[1]",
                                    "title"         =>  $tooltip[0]
                                ];

        }   else    {
            $base_attributes = [
                                    "type"          =>  "submit",
                                    "data-toggle"   =>  "tooltip",
                                    "data-placement"=>  "top",
                                    "title"         =>  $tooltip
                                ];
        } 
        $compiler .= attr_append($attr, $base_attributes).'>';

    }   elseif ($popover)    {

        if (is_array($popover)) {
            $base_attributes =   [
                                    "type"          =>  "submit",
                                    "value"         =>  $content,
                                    "data-container"=>  "body",
                                    "data-toggle"   =>  "popover",
                                    "data-placement"=>  $popover[1],
                                    "data-content"  =>  $popover[0]
                                ];

        }   else    {
            $base_attributes = [
                                    "type"          =>  "submit",
                                    "value"         =>  $content,
                                    "data-container"=>  "body",
                                    "data-toggle"   =>  "popover",
                                    "data-placement"=>  $popover[1],
                                    "data-content"  =>  $popover[0]
                                ];
        } 
        $compiler .= attr_append($attr, $base_attributes).'>';

    }   else    {
        $base_attributes =  [
                                "type"  =>  "submit",
                                "value" =>  $content
                            ];
        $compiler .= attr_append($attr, $base_attributes).'>';
    }

    if ($script) {
        $compiler .= "<script>$script</script>";
    }

    if ($style) {
        $compiler .= "<style>$style</style>";
    } 

    $compiler .= '</div>'; 
}

if ($dropdown) {

    if (is_array($dropdown)) {
        $drop_compilator = "";
        $i = 0;

        foreach ($dropdown as $value) {

            if ($i < (count($dropdown)-1) && !preg_match("/[<>]+/",
                $dropdown[count($dropdown)-1])) {
                    
                $drop_compilator .= $value;
                $i++;

            }   elseif ($i <= (count($dropdown)-1) && preg_match("/[<>]+/",
                        $dropdown[count($dropdown)-1]))  {

                $drop_compilator .= $value;
                $i++;

            }   else    {
                break;
            }
        }
        $compiler .= 
            '<div class="dropdown-menu">'.
                $drop_compilator.
            '</div>';

    }   else    {
        $compiler .= 
            '<div class="dropdown-menu">'.
                $dropdown.
            '</div>';
    } 
} 

if ($collapse) {
    $compiler .= 
        '<div class="collapse navbar-collapse" id="'.$secondary_id.'">'.
            $collapse.
        '</div>';
}
return $compiler;
}

?>