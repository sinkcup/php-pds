<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-Hans" lang="zh-Hans">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Welcome to php-pds!</title>
    </head>
    <body>
        <h1>Welcome to php-pds!</h1>
        <p>Hello！树先生。这是一个开源项目，探讨PHP项目目录规划。</p>
        <p>项目代码：<a href="https://github.com/sinkcup/php-pds" target="_blank">https://github.com/sinkcup/php-pds</a></p>
        <h2>评论列表</h2>
<?php
$file = './comments.json';
if(file_exists($file)) {
    $tmp = file_get_contents($file);
    if(!empty($tmp)) {
        $data = json_decode($tmp, true);
        foreach($data as $k=>$v) {
            $id = $k + 1;
            echo '<div>'
                    . '<a href="#comment_' . $id . '" id="comment_' . $id . '">' . $id . '楼</a>'
                    . '<p>昵称：' . $v['nickname'] . '</p>'
                    . '<p>评论：' . $v['content'] . '</p>'
                 . '</div>';
        }
    }
}
?>
        <form action="comments.php" method="post">
            <fieldset>
                <legend>发表评论</legend>
                <div>
                    <label for="nickname">昵称：</label>
                    <input type="text" name="nickname" id="nickname" />
                </div>
                <div>
                    <label for="content">评论：</label>
                    <textarea name="content" id="content" cols="30" rows="5"></textarea>
                </div>
                <div>
                    <input type="submit" value="发表" />
                </div>
            </fieldset>
        </form>
    </body>
</html>