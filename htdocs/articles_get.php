<?php
/**
 * 显示一篇文章。网页、txt多种展现形式。
 */

require_once __DIR__ . '/../src/common.php';
$input = $_GET;
$output['http']['contentType'] = isset($input['contentType']) ? $input['contentType'] : 'text/html';
if(isset($input['isDownload'])) {
    $output['http']['contentDisposition'] = 'attachment; filename=notice.txt';
}

if(!isset($input['id']) || empty($input['id'])) {
    $output['data']['notice'] = '出错了：缺少参数';
    $output['data']['backUri'] = './index.php';
    output($output);
}

require_once __DIR__ . '/../src/db.php';

$sql = 'SELECT `id`, `author`, `title`, `content` FROM `articles` WHERE id=' . $db->quote($input['id']) . ' LIMIT 1';

$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$r = $stmt->fetchAll();

if(empty($r)) {
    $output['data']['notice'] = '出错了：查无此文';
    $output['data']['backUri'] = './index.php';
    output($output);
}

$article = $r[0];
$output['data']['article'] = $article;
$filename = $article['id'] . '.txt';

//客户端的换行
//eol（end of line）：每行末尾换行。
//参考http://zh.wikipedia.org/wiki/%E6%8F%9B%E8%A1%8C
//参考http://superuser.com/questions/439440/did-mac-os-lion-switch-to-using-line-feeds-lf-n-for-line-breaks-instead-of
//eof（end of file）：文章结尾换行。
//Linux认为每行文本后面都必须有换行符，所以要补上。否则会出现noeol警告。
//Windows认为不应该。
if(isset($input['eol'])) {
    switch($input['eol']) {
        case 'dos':
            $output['client']['eol'] = "\r\n";
            $output['client']['eof'] = false;
            $filename = $article['id'] . '_dos.txt';
            break;
        case 'mac_os':
            $output['client']['eol'] = "\r";
            $output['client']['eof'] = true;
            $filename = $article['id'] . '_mac_os.txt';
            break;
        default:
            $output['client']['eol'] = "\n";
            $output['client']['eof'] = true;
            $filename = $article['id'] . '_unix.txt';
            break;
    }
}
if(isset($input['isDownload'])) {
    $output['http']['contentDisposition'] = 'attachment; filename=' . $filename;
}
$output['layout'] = 'articles_get';
output($output);
?>
