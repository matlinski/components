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
    $output["style"] = $style;
    return $output;
}   
function attr_append($attr, $base_attributes){
    $attr_compiler = "";
    if(is_array($attr)){
        foreach($attr as $key => $value){
            foreach ($base_attributes as $k => $v) {
                var_dump($value, $v);
                if($key === $k) {
                    $attr_compiler .= " $key=\"$value\"";
                }
                else{
                    $attr_compiler .= " $key=\"$value\"";
                } 
            }
        }
        $attr = $attr_compiler;
    } else {
        $attr= explode(" ",$attr);
        foreach ($attr as $key => $value) {
            foreach ($base_attributes as $k => $v) {
                if(preg_match("/type([^']*?)=([^']*?)\"([^']*?)\"/", $value)){
                    $attr_string = preg_grep("/type([^']*?)=([^']*?)\"([^']*?)\"/", [$value]);
                    $value = preg_replace("/type([^']*?)=([^']*?)\"([^']*?)\"/", "", $value);
                    $attr_string= implode("",$attr_string);
                    $attr_string= explode("type=",$attr_string);
                    $attr_string= implode("",$attr_string);
                    $attr_string= explode("\"",$attr_string);
                    $attr_string= implode("",$attr_string);
                    var_dump($attr_string);
                    }
                    var_dump($key, $value, $k, $v);
                    $attr_compiler .= " $key=\"$attr_string\"";
            }
        }
    }
    return $attr_compiler;
}
?>
