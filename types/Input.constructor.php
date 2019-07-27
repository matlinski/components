<?php

function Input($input = "") {
$base_class = "form-group";

$default = [
                "content"   =>  "Value placeholder",
                "tag"       =>  "input",
                "label"     =>  "Label placeholder",
                "sticker"   =>  '<span id=\'basic-addon\'> @ </span>',
                "attr"      =>  "",
                "template"  =>  "form-control",
                "style"     =>  "",
                "script"    =>  ""
            ];

            foreach(Component($input, $default, $base_class) as $key => $value) {
                $$key = $value;
           }
           
           if (preg_match("/<\/span>/", $sticker)) {
                        $style .= '#'.$id.'.'.$base_class.'>.input-group>div{
                            display: -ms-flexbox;
                            display: flex;
                            -ms-flex-align: center;
                            align-items: center;
                            padding: .375rem .75rem;
                            margin-bottom: 0;
                            font-size: 1rem;
                            font-weight: 400;
                            line-height: 1.5;
                            color: #495057;
                            text-align: center;
                            white-space: nowrap;
                            background-color: #e9ecef;
                            border: 1px solid #ced4da;
                            border-radius: .25rem;
                        }';
                    }

           $scheme =   [
                          [
                               "condition" => true,
                               "line"      => '<div id="'.$id.'" style="width:auto" class="'.$base_class.' '.$template.'">'
                          ],
                          [
                               "condition" => is_array($label),
                               "line"      => '<label for="'.$id.'" class="'.$label[1].'">'.
                                                $label[0].
                                            '</label>'
                          ],
                          [
                               "condition" => !is_array($label),
                               "line"      => '<label for="'.$id.'">'.
                                                    $label.
                                                '</label>'
                          ],
                          [
                               "condition" => true,
                               "line"      => '<div class="input-group ">'
                          ],
                          [
                               "condition" => $sticker && is_array($sticker) && $sticker[1]=== "append",
                               "line"      => $base_attributes["value"] = $content
                          ],
                          [
                               "condition" => $sticker && is_array($sticker),
                               "line"      => '<'.$tag.' class="form-control" '.
                                                attr_append($attr, $base_attributes).'>'
                          ],
                          [
                               "condition" => $sticker && is_array($sticker) && $sticker[1] !== "append",
                               "line"      => $content
                          ],
                          [
                               "condition" => $sticker && is_array($sticker),
                               "line"      => '<div class="input-group-'.$sticker[1].'">'
                          ],
                          [
                               "condition" => $sticker && is_array($sticker),
                               "line"      => $sticker[0]
                          ],
                          [
                               "condition" => $sticker && !is_array($sticker),
                               "line"      => '<div class="input-group-prepend">'
                          ],
                          [
                               "condition" => $sticker && !is_array($sticker),
                               "line"      => $sticker
                          ],
                          [
                               "condition" => $sticker,
                               "line"      => '</div>'
                          ],
                          [
                               "condition" => $tag === "input",
                               "line"      => '<'.$tag.' class="form-control" '.
                                            attr_append($attr, [
                                                                             "type"              =>  "text",
                                                                             "placeholder"       =>  "example placeholder",
                                                                             "aria-label"        =>  "example",
                                                                             "aria-describedby"  =>  "basic-addon",
                                                                             "value"             =>  $content
                                                                         ]).'>'
                          ],
                          [
                               "condition" => $tag !== "input",
                               "line"      => $content
                          ],
                          [
                               "condition" => $tag !== "input",
                               "line"      => "</$tag>"
                          ],
                          [
                               "condition" => true,
                               "line"      => "</div>"
                          ],
                          [
                                "condition" => $script !== false,
                                "line"      => "<script>$script</script>"
                          ],
                          [
                                "condition" => $style  !== false,
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