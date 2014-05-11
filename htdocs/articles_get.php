<?php
$input = $_GET;
if(!isset($input['id']) || empty($input['id'])) {
    $notice = '出错了：缺少参数';
    $backUri = './index.php';
    require __DIR__ . '/../res/notice.html';
    exit;
}

require_once __DIR__ . '/../src/db.php';

$sql = 'SELECT `id`, `author`, `title`, `content` FROM `articles` WHERE id=' . $db->quote($input['id']) . ' LIMIT 1';

$stmt = $db->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$r = $stmt->fetchAll();

//todo 这里出错时显示了html。如果是txt模式时，怎么显示呢？
if(empty($r)) {
    $notice = '出错了：查无此文';
    $backUri = './index.php';
    require __DIR__ . '/../res/notice.html';
    exit;
}

$article = $r[0];
$contentType = isset($input['contentType']) ? $input['contentType'] : 'text/html';
switch($contentType) {
    case 'text/plain' :
    case 'txt' :
        //文本
        header('Content-Type: text/plain; charset=utf-8');
        echo '《' . $article['title'] . '》作者：' . $article['author'] . "\n";
        echo $article['content'] . "\n";
        break;
    default :
        require __DIR__ . '/../res/articles_get.html';
        exit;
}
?>
