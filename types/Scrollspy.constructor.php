<?php

function Scrollspy($input = "") {
$base_class = "scrollspy";

$default = [
              "content"   => 
                    [
                      'Top',
                      'Middle',
                      'Bottom'
                    ],
              "reference_id"   =>  "id_placeholder",
              "attr"      =>  "",
              "template"  =>  "navbar-light bg-light col-2",
              "style"     =>  "&{".
                                  "position: fixed;".
                                  "top: 50%;".
                                  "right: 0%;".
                                  "z-index: 999;".
                                  "transform: translateY(-50%)".
                              "}",
              "script"    =>  ""
            ];

            foreach(Component($input, $default, $base_class) as $key => $value) {
              $$key = $value;
         }
         function feature($content, $reference_id){
          if (is_array($content)) {
            $content_compiler = '';
                   foreach($content as $key => $value) {
                    $content_compiler .= 
                       '<a class="list-group-item list-group-item-action" href="#'.$reference_id.$key.'">'.
                           $value.
                       '</a>';
                   }
              
                 } else  {
                   $content_compiler .= 'Please set the content as an array';
                 }
                 return $content_compiler;
         }
         $script .= '$(\'body\').scrollspy({ target: \'#'.$id.'\'})';
         
         $scheme =   [
                        [
                             "condition" => true,
                             "line"      => '<nav id="'.$id.'" class="bg-transparent '.$base_class.' '.$template.
                                      '" '.attr_append($attr).'>'
                        ],
                        [
                             "condition" => true,
                             "line"      => feature($content, $reference_id)
                        ],
                        [
                              "condition" => !empty($script),
                              "line"      => html('script').$script.html('script','close')
                         ],
                         [
                              "condition" => !empty($style),
                              "line"      => html('style').$style.html('style','close')
                         ],
                        [
                             "condition" => true,
                             "line"      => html('nav', '/')
                        ],
                     ];
                     
         return Compiler($base_class, $scheme);

}

?>