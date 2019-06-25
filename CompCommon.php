<?php
function Component($json, $default){
    if(is_string($json))$s = json_decode($json, true);
    if(json_last_error() != JSON_ERROR_NONE && !is_array($json)){
        $settings = $default;
        echo "<script>".info($settings, $t = temp("buttons"))."</script>";
    }
    elseif(is_array($json)){
        $output = [];
        $settings = $default;
        $i = 0;
        foreach($settings as $key => $value){
            if($i >= count($json)) break;
            $settings[$key] = $json[$i];
            $i++;
        }
    }
    else{
        
        $settings = $default;
        foreach($s as $key => $value){
            $settings[$key] = $value;
        }
    }
    foreach($settings as $key => $value){
        $$key = $value;
        $output[$key] = $value;
    }
    
    if(is_array($style)){
        $style_compiler = "";
        foreach($style as $key => $value){
            $key = preg_replace("/[&]/", "", $key);
            $style_compiler .= "\n#btn{$GLOBALS['counter']}$key{\n".$value."\n}";
        }
        $style = $style_compiler;
    }else{
        $style_compiler = "";
        $style = preg_replace("/[&]/", "\n#btn{$GLOBALS['counter']}", $style);
        $style_compiler .= $style;
        $style = $style_compiler;
    }
    $output["style"] = $style;
    return $output;
}   

?>
    <!-- $compiler .= "<div id=\"btn{$GLOBALS['counter']}\">";
    $compiler .= "<a $attr >{$content}</a>";
    if (array_key_exists($template, temp("buttons"))) $compiler .= "<style>".temp("buttons")[$template][0].$style."</style>
                <script>".temp("buttons")[$template][1].$script."</script>";
    if(array_key_exists($template, temp("buttons")) === false && $style) $compiler .= "<style>$style</style>";
    if(array_key_exists($template, temp("buttons")) === false && $script) $compiler .= "<script>$script</script>";
    $compiler .= "</div>";
    $GLOBALS['counter']++;
    return $compiler;          

    } -->