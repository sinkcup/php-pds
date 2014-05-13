<?php
function output($output)
{
    if(!isset($output['http']['contentType'])) {
        $output['http']['contentType'] = 'text/html';
    }
    if(isset($output['http']['contentDisposition'])) {
        header('Content-Disposition: ' . $output['http']['contentDisposition']);
    }
    switch($output['http']['contentType']) {
        case 'text/plain' :
        case 'txt' :
            //文本
            header('Content-Type: text/plain; charset=utf-8');
            echo $output['data']['txt'] . "\n";
            break;
        default :
            header('Content-Type: text/html; charset=utf-8');
            $d = $output['data'];
            require __DIR__ . '/../res/' . $output['layout'] . '.html';
    }
    exit;
}
?>
