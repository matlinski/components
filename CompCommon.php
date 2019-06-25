<?php
function isJson($string) {
    if(is_string($string)){
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
    else return false;
   }

$compiler = "";
if(!isJson($json) && !is_array($json)){
    $settings = $default;
    echo "<script>".info($settings, $t = $temp)."</script>";
}
elseif(is_array($json)){
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
    $s = json_decode($json, true);
    foreach($s as $key => $value){
        $settings[$key] = $value;
    }
}
foreach($settings as $key => $value){
    $$key = $value;
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
?>