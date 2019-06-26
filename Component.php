<?php
function Component($json, $default, $base_class){
    $user_class ="";
    if(is_string($json))$s = json_decode($json, true);
    if(json_last_error() != JSON_ERROR_NONE && !is_array($json)){
        $settings = $default;
        echo "<script>".info($settings)."</script>";
    }  elseif(is_array($json))  {
        $output = [];
        $settings = $default;
        $i = 0;
        foreach($settings as $key => $value){
            if($i >= count($json)) break;
            $settings[$key] = $json[$i];
            $i++;
        }
    }  else  {
        
        $settings = $default;
        foreach($s as $key => $value){
            $settings[$key] = $value;
        }
    }
    foreach($settings as $key => $value){
        $$key = $value;
        $output[$key] = $value;
    }
    if(is_array($attr)){
        $attr_compiler = "";
        foreach($attr as $key => $value){
            if($key !== "class")  $attr_compiler .= " $key=\"$value\"" ;
            else{
                $user_class = " $value";
            } 
        }
        $attr = $attr_compiler;
    } else {
        if(preg_match("/class([^']*?)=([^']*?)\"([^']*?)\"/", $attr)){
            $attr= explode(" ",$attr);
            $class_string = preg_grep("/class([^']*?)=([^']*?)\"([^']*?)\"/", $attr);
            $attr = preg_replace("/class([^']*?)=([^']*?)\"([^']*?)\"/", "", $attr);
            $attr= implode(" ",$attr);
            $class_string= implode("",$class_string);
            $class_string= explode("class=",$class_string);
            $class_string= implode("",$class_string);
            $class_string= explode("\"",$class_string);
            $class_string= implode("",$class_string);
            $user_class = $class_string;
            }
    }
    if(is_array($style)){
        $style_compiler = "";
        foreach($style as $key => $value){
            $key = preg_replace("/[&]/", "", $key);
            $style_compiler .= ".{$base_class}.{$template}$key{\n".$value."\n}";
        }
        $style = $style_compiler;
    } else {
        $style_compiler = "";
        $style = preg_replace("/[&]/", ".{$base_class}.{$template}", $style);
        $style_compiler .= $style;
        $style = $style_compiler;
    }
    $output["attr"] = $attr;
    $output["user_class"] = $user_class;
    $output["style"] = $style;
    return $output;
}   

?>
