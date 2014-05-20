<?php
$output = array(
    'http' => array(
        'contentType' => 'text/html',
    ),
    'data' => array(),
    'layout' => 'notice',
    'client' => array(
        'eol' => "\n",
        'eof' => true,
    ),
);

function output($output)
{
    if(isset($output['http']['contentDisposition'])) {
        header('Content-Disposition: ' . $output['http']['contentDisposition']);
    }
    $d = $output['data'];
    switch($output['http']['contentType']) {
        case 'text/plain' :
        case 'txt' :
            //文本
            header('Content-Type: text/plain; charset=utf-8');
            $file = __DIR__ . '/../res/' . $output['layout'] . '.txt';
            if(file_exists($file)) {
                include $file;
            } else {
                echo $d;
            }
            break;
        default :
            header('Content-Type: text/html; charset=utf-8');
            include __DIR__ . '/../res/' . $output['layout'] . '.html';
    }
    exit;
}
?>
