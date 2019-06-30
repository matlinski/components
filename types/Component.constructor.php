<?php
function Component($json, $default, $base_class){
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
            $style_compiler .= "#".$output["id"].">.{$base_class}$key{\n".$value."\n}";
        }
        $style = $style_compiler;
    } else {
        $style_compiler = "";
        $style = preg_replace("/[&]/", "#".$output["id"].">.{$base_class}", $style);
        $style_compiler .= $style;
        $style = $style_compiler;
    }
    
    $output["attr"] = $attr;
    $output["style"] = $style;
    return $output;
}   

?>
