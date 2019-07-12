<?
function tpl ($tpl, $data = null) {
    $path = TEMPLATES_PATH.$tpl.'.php';
    extract ($data);

    include $path;
}
