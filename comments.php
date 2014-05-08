<?php
$input = $_POST;
$file = './comments.json';
$data = array();
if(file_exists($file)) {
    $tmp = file_get_contents($file);
    if(!empty($tmp)) {
        $data = json_decode($tmp, true);
    }
}
$data[] = $input;
file_put_contents('./comments.json', json_encode($data));
echo '保存成功';
?>
