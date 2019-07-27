<?php
function Card($input = "") {
$base_class = "card";

$default = [
                "content"   =>  "<h5>Title placeholder</h5>".
                                "<p>Body placeholder</p>".
                                "<button class='btn btn-primary'>Click here</button>",

                "image"     =>  '<img width=\'100%\' src=\'https://source.unsplash.com/'.
                                    rand(320,370).'x350/\' alt=\'...\'>',
                
                "attr"      =>  "",                   
                "template"  =>  "col-lg-3 col-md-5 col-sm-7 col-12",
                "style"     =>  "&>img{".
                                    "background-size: cover;".
                                    "border-top-left-radius: calc(.25rem - 1px);".
                                    "border-top-right-radius: calc(.25rem - 1px);".
                                "}",
                "script"    =>  ""
            ];

            foreach(Component($input, $default, $base_class) as $key => $value) {
                $$key = $value;
           }
           
           $scheme =   [
                          [
                               "condition" => true,
                               "line"      => '<div id="'.$id.'" class="'.$base_class.' '.$template.'" '.attr_append($attr).'>'
                          ],
                          [
                               "condition" => true,
                               "line"      => $image
                          ],
                          [
                               "condition" => true,
                               "line"      => '<div class="card-body">'.
                                                 $content.
                                             '</div>'
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
                               "line"      => "</div>"
                          ],
                       ];
                       
           return Compiler($base_class, $scheme);
}

?>
