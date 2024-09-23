<?php
function createInput($placeholder, $name) {
    return sprintf('<div class="input-group">
        <input class="input--style-2" type="text" placeholder="%s" name="%s">
        </div>', $placeholder, $name);
}

function createSelect($arr, $select) {
    $xhtml= '<option disabled="disabled" selected="selected">'.$select'</option>';
    foreach ($arr as $item) {
        $xhtml .= '<option value='.$item.'>'.$item.'</option>';
    }
    return $xhtml;
}

