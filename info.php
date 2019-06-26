<?php
function info($settings =false/*, $t = false*/){
    $compiler = "";
    $compiler2 = "";
        $compiler .= "console.log('The default options for this components are: ');\n
        var settings = {};\n";
        if(is_array($settings)){
            foreach ($settings as $key => $value) {
                if(is_array($value)){
                    $compiler .= "settings.".$key." = "."{};\n";
                    foreach($value as $k2 => $v2){
                        $compiler .= "settings.".$key.".".$k2." = "."\"$v2\";\n";
                    }
                }
                if(!is_array($value)) $compiler .= "settings.".$key." = "."\"$value\";\n";
            }
        }
        $compiler .= "console.table(settings);\n";
        // if(is_array($t)){
        //     $compiler2 .= "console.log('The available templates for this components are: ');\n";
        //     $compiler2 .= "var templates = [];\n";
        //     $i = 0;
        //     foreach ($t as $key => $value) {
        //         $compiler2 .= "templates[\"".$i."\"] = "."\"$key\";\n";
        //         $i++;
        //     }
        //     $compiler2 .= "console.table(templates);\n";
        // }
        $output = $compiler;//.$compiler2
        return $output;
}
?>