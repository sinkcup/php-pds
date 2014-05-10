#php-pds

PHP项目目录规划（PHP Project Directory Structure）

##技术路线

<table>
    <tr>
        <th>HTML</th>
        <th>PHP</th>
        <th>数据存储</th>
        <th>HTTP协议</th>
        <th>计算机文化导论</th>
    </tr>
    <tr>
        <td>语义化</td>
        <td>让内容动起来</td>
        <td>文件存数据</td>
        <td>GET、POST</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>表现与业务分离</td>
        <td></td>
        <td>Content-Type</td>
        <td>Unicode</td>
    </tr>
    <tr>
        <td>DOCTYPE</td>
        <td>PDO</td>
        <td>MySQL</td>
        <td></td>
        <td></td>
    </tr>
</table>

##已解决的问题

* 如何用PHP操作MySQL数据库？

    使用PDO即可。
    
* PDO、php_mysqli和php_mysql的区别是什么？

    请自行了解。注意：php_mysql已废弃。

* HTML页面开头的xml version，DOCTYPE html后面的网址记不住啊，可以不写吗？

    可以不写。HTML5不需要写那些了。

##待解决的问题

* 多个文件里都连了数据库，如果密码变了，每个地方都要改，怎么办？

    且听下回分解。

* 访问index.php是正常网页，访问index.html是错误的，如何禁止访问模板等文件？

    且听下回分解。

* 单引号能保存吗？会导致什么后果？

    请按照截图进行实验。且听下回分解。

![单引号实验保存1](http://com-163-sinkcup-img-agc.qiniudn.com/single_quote_mark.png)
![单引号实验保存2](http://com-163-sinkcup-img-agc.qiniudn.com/sql_injection.png)
