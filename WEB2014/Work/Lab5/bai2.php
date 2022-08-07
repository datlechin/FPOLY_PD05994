<?php
function createBox(string $content, int $width = 150, int $height = 100): string {
    $html = '<div class="box" style="width: '. $width .'; height: '. $height .'">';
    $html .= '<span>'. $content .'</span>';
    $html .= '</div>';

    return $html;
}

echo createBox('Day la box 1', 250, 200);
echo createBox('Day la box 2');
?>

<style>
    .box {
        border: 1px solid red;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px;
    }
</style>
