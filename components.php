<?php
$GLOBALS["info_anabled"] = true;
$GLOBALS["bg-color"] = "white";
$GLOBALS["tx-color"] = "black";
$GLOBALS['counter'] = 0;
function isJson($string) {
    json_decode($string);
    return (json_last_error() == JSON_ERROR_NONE);
   }

function info($settings = false){
    $compiler = "";
    if($GLOBALS["info_anabled"]){
        $compiler .= "console.log('The default options for this components are: ');\n
        var settings = {};\n";
        foreach ($settings as $key => $value) {
            if(is_array($value)){
                $compiler .= "settings.".$key." = "."{};\n";
                foreach($value as $k2 => $v2){
                    $compiler .= "settings.".$key.".".$k2." = "."\"$v2\";\n";
                }
            }
            if(!is_array($value)) $compiler .= "settings.".$key." = "."\"$value\";\n";
        }
        $compiler .= "console.table(settings);\n";
        return $compiler;
    }
    if(!is_array($settings)) echo "<b style=\"color: red;\">This is a function that displays options for custumising styles and effects of the components. It's sufficient if you place a require_once(\"Directory\") of components.php in your html document and call one of the functions to create the component. The function will then display the chosen component and call a JavaScript to display more options in your browsers console. To disable this function please change the value of \$GLOBALS[\"info_anabled\"] to false.</b>";
}


function Button($json = ""){
    $compiler = "";
    $arr_style = [];
    $default = ["content"=> "placeholder", "template" =>"default", "attr" => "href='#'", "style"=> $arr_style, "script"=> ""];
    if(!isJson($json)){
        $settings = $default;
        echo "<script>".info($settings)."</script>";
    }else{
        $settings = $default;
        $s = json_decode($json, true);
        foreach($s as $key => $value){
            $settings[$key] = $value;
        }
    }
    foreach($settings as $key => $value){
        $$key = $value;
    }
    if(is_array($arr_style)){
        $style_compiler = "";
        foreach($style as $key => $value){
            $key = preg_replace("/[&]/", "", $key);
            $style_compiler .= "\n#btn{$GLOBALS['counter']}$key{\n".$value."\n}";
        }
        $style = $style_compiler;
    }
    require_once("templates/buttons.php");
    $compiler .= "<div id=\"btn{$GLOBALS['counter']}\">";
    if (array_key_exists($template, $temp)) $compiler .= "<style>".$temp[$template][0].$style."</style>
                <script>".$temp[$template][1].$script."</script>";
    if(array_key_exists($template, $temp) === false && $style) $compiler .= "<style>$style</style>";
    if(array_key_exists($template, $temp) === false && $script) $compiler .= "<script>$script</script>";
    $compiler .= "<a $attr >{$content}</a>
          </div>";
    return $compiler;          
    $GLOBALS['counter'] = $GLOBALS['counter'] + 1;
}

?>
