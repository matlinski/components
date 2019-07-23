<?php
function Component($input, $default, $base_class){
    if(is_string($input)) $s = json_decode($input, true);
    if(json_last_error() != JSON_ERROR_NONE && !is_array($input)){
        $settings = $default;
        if($input)$settings["content"] = $input;
        echo "<script>".info($settings)."</script>";
    }  elseif(is_array($input)){
        $output = [];
        $settings = $default;
        $i = 0;
        foreach($settings as $key => $value){
            if(!(array_keys($input) !== range(0, count($input) - 1))){
                if($i >= count($input)) break;
                $settings[$key] = $input[$i];
                $i++;
            } else {
                foreach ($input as $k => $v) {
                    $settings[$k] = $v;
                }
            }
        }
    }  else  {
        
        $settings = $default;
        foreach($s as $key => $value){
            $settings[$key] = $value;
        }
    }
    $output["id"] = $base_class;
    $id_supply = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'q', 'w', 'e', 'r', 't', 'y', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'];
    for($i = 0; $i < 8; $i++){
        $output["id"] .= $id_supply[rand(0, (count($id_supply) - 1) )];
    }
    foreach($settings as $key => $value){
        $$key = $value;
        $output[$key] = $value;
    }
    if(is_array($style)){
        $style_compiler = "";
        foreach($style as $key => $value){
            $key = preg_replace("/[&]/", "", $key);
            if(isset($collapse) && !empty($collapse)) $style_compiler .= "#".$output["id"].".{$base_class}$key{\n".$value."\n}";
            else $style_compiler .= "#".$output["id"].">.{$base_class}$key{\n".$value."\n}";
        }
        $style = $style_compiler;
    } else {
        $style_compiler = "";
        if(isset($collapse) && !empty($collapse)) $style = preg_replace("/[&]/", "#".$output["id"].".{$base_class}", $style);
        else $style = preg_replace("/[&]/", "#".$output["id"].">.{$base_class}", $style);
        $style_compiler .= $style;
        $style = $style_compiler;
    }
    $output["style"] = $style;
    return $output;
}   

?>
