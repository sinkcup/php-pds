<?php
$file = './comments.json';
$comments = array();
if(file_exists($file)) {
    $tmp = file_get_contents($file);
    if(!empty($tmp)) {
        $comments = json_decode($tmp, true);
    }
}
require __DIR__ . '/index.html';
?>
