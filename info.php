<?php
function info($settings = false, $t = false){
    if(!is_array($settings)) return "<b style=\"color: red;\">This is a function that displays options for custumising styles and effects of the components. It's sufficient if you place a require_once(\"Directory\") of components.php in your html document and call one of the functions to create the component. The function will then display the chosen component and call a JavaScript to display more options in your browsers console. To disable this function please change the value of \$GLOBALS[\"info_anabled\"] to false.</b>";
    $compiler = "";
    $compiler2 = "";
    if($GLOBALS["info_anabled"]){
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
        if(is_array($t)){
            $compiler2 .= "console.log('The available templates for this components are: ');\n";
            $compiler2 .= "var templates = [];\n";
            $i = 0;
            foreach ($t as $key => $value) {
                $compiler2 .= "templates[\"".$i."\"] = "."\"$key\";\n";
                $i++;
            }
            $compiler2 .= "console.table(templates);\n";
        }
        $output = $compiler.$compiler2;
        return $output;
    }
}
?>