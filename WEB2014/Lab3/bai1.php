<?php

function createSelectBox(string $name, array $array, $keySelected): string {
    $html = '<select name="'. $name .'">';

    foreach ($array as $key => $value) {
        $selected = ($key == $keySelected) ? 'selected' : '';
        $html .= '<option value="'. $key .'" '. $selected .'>'. $value .'</option>';
    }

    $html .= '</select>';

    return $html;
}

$languages = ['PHP', 'JavaScript', 'Python', 'C#', 'Kotlin'];
$frameworks = ['Laravel', 'Codeigniter', 'Symfony', 'Yii', 'CakePHP'];

echo createSelectBox('languages', $languages, 0);
echo createSelectBox('frameworks', $frameworks, 3);
