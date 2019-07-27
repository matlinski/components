<?php

function Modal($input = "") {
$base_class = "modal";

$default = [
            "header"    =>  '<h5 class=\'modal-title\'>'.
                                'Header placeholder'.
                            '</h5>',

            "body"      =>  '<p>'.
                                'Body placeholder'.
                            '</p>',

            "footer"    =>  '<button class=\'btn btn-primary\'>'.
                                'Take action!'.
                            '</button>',

            "trigger_id"=>  "myID",
            "attr"      =>  '',
            "template"  =>  "fade",
            "style"     =>  "",
            "script"    =>  ""
          ];

          foreach(Component($input, $default, $base_class) as $key => $value) {
            $$key = $value;
       }
       $script .= 
         '$(\'#myModal\').on(\'shown.bs.modal\', function () {
             $(\'#myInput\').trigger(\'focus\')
         })';
       
       $scheme =   [
                      [
                           "condition" => true,
                           "line"      => '<div id="'.$trigger_id.'" class="'.$base_class.
                                    ' '.$template.'" '.attr_append($attr, [
                                                                             "tabindex"    =>  "-1",
                                                                             "role"        =>  "dialog",
                                                                             "aria-hidden" =>  "true"
                                                                         ]).'>'
                      ],
                      [
                           "condition" => true,
                           "line"      => '<div class="modal-dialog" role="document">'
                      ],
                      [
                           "condition" => true,
                           "line"      => '<div class="modal-content">'
                      ],
                      [
                           "condition" => true,
                           "line"      => '<div class="modal-header">'
                      ],
                      [
                           "condition" => true,
                           "line"      => $header
                      ],
                      [
                           "condition" => true,
                           "line"      => '<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">
                                                  &times;
                                              </span>
                                          </button>'
                      ],
                      [
                           "condition" => true,
                           "line"      => '</div>'
                      ],
                      [
                           "condition" => true,
                           "line"      => '<div class="modal-body">'
                      ],
                      [
                           "condition" => true,
                           "line"      => $body
                      ],
                      [
                           "condition" => true,
                           "line"      => '</div>'
                      ],
                      [
                           "condition" => true,
                           "line"      => '<div class="modal-footer">'
                      ],
                      [
                           "condition" => true,
                           "line"      => '<button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Close
                                        </button>'
                      ],
                      [
                           "condition" => true,
                           "line"      => $footer
                      ],
                      [
                           "condition" => true,
                           "line"      => '</div>'
                      ],
                      [
                           "condition" => true,
                           "line"      => '</div>'
                      ],
                      [
                           "condition" => true,
                           "line"      => '</div>'
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
                           "line"      => '</div>'
                      ],
                   ];
                   
       return Compiler($base_class, $scheme);
}

?>