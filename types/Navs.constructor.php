<?php

function Navs($input = ""){
$compiler = "";
$base_class = "nav";

$default = [
                "content"   => 
                    [
                        '<a href=\'home.html\'>home</a>',
                        '<a href=\'about.html\'>About us</a>',
                        '<a href=\'contact.html\'>Contact</a>'
                    ],
                'active'    =>  2,
                'disabled'  =>  1,
                "attr"      =>  "",
                "template"  =>  "nav-tabs",
                "style"     =>  "",
                "script"    =>  ""
            ];

foreach(Component($input, $default, $base_class) as $key => $value){
    $$key = $value;
}
$base_attributes = [];
$compiler .= '<ul id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr, $base_attributes).'>';
$content_compiler = "";

if(is_array($content)){

    foreach($content as $key => $value){
        $value = explode('href', $value);

        if(($key+1) == $active){
            $value[0] .= 'class ="nav-link active" ';

        } elseif(($key+1) == $disabled) {
            $value[0] .= 'class ="nav-link disabled" ';

        } else {
            $value[0] .= 'class ="nav-link" ';
        }
        $value = implode('href', $value);
        $content_compiler .= '<li class="nav-item">'.$value.'</li>';
    }
    $compiler .= $content_compiler;

} else {
    $content_compiler .= 'Please set the content as an array';
    $compiler .= $content_compiler;
}

if($script){
        $compiler .= "<script>$script</script>";
} 

if($style){
        $compiler .= "<style>$style</style>";
} 
$compiler .= "</ul>";
return $compiler;
}

?>