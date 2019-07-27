<?php

function Breadcrumb($input = "") {
$base_class = "breadcrumb";

$default = [
                "content"   => 
                    [
                    '<a href=\'home.html\'>home</a>',
                    '<a href=\'library.html\'>library</a>',
                    'data'
                    ],
                "separator" =>  ">",
                "attr"      =>  "",
                "template"  =>  "justify-content-left",
                "style"     =>  "",
                "script"    =>  ""
            ];
            
            foreach(Component($input, $default, $base_class) as $key => $value) {
                $$key = $value;
           }
           if(is_array($content)){

                function feature($content){
                    $content_compiler = "";
                    $i = 1;
                    foreach($content as $value) {
                    
                        if ($i === (count($content)) ) {
                            $content_compiler .= 
                                '<li class="breadcrumb-item active" aria-current="page">'.
                                    $value.
                                '</li>';
                        
                        }	else	{
                            $content_compiler .= 
                                '<li class="breadcrumb-item">'.
                                    $value.
                                '</li>';
                        } 
                    $i++;
                    }
                    return $content_compiler;
            }
           } else {
            function feature($content){
                return 'Please set the content as an array';
            }
           }
           
           if ($separator) {
                     $style .= '
                         .breadcrumb-item + .breadcrumb-item::before{
                             content: "'.$separator.'";
                         }
                     ';
                 }   
           $scheme =   [
                          [
                               "condition" => true,
                               "line"      => '<ul id="'.$id.'" class="'.$base_class.' '.$template.
                                                     '" '.attr_append($attr).'>'
                          ],
                          [
                               "condition" => true,
                               "line"      => feature($content)
                          ],
                          [
                               "condition" => $script !== false,
                               "line"      => "<script>$script</script>"
                          ],
                          [
                               "condition" => $style !== false,
                               "line"      => "<style>$style</style>"
                          ],
                          [
                               "condition" => true,
                               "line"      => "</ul>"
                          ],
                       ];
                       
           return Compiler($base_class, $scheme);
}

?>

<!-- 
$content_compiler = "";
$i = 1;
foreach($content as $value) {

if ($i === (count($content)) ) {
$content_compiler .= 
'<li class="breadcrumb-item active" aria-current="page">'.
$value.
'</li>';

}	else	{
$content_compiler .= 
'<li class="breadcrumb-item">'.
$value.
'</li>';
} 
$i++;
} -->