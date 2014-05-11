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
        <td>charset</td>
        <td>Unicode</td>
    </tr>
    <tr>
        <td>DOCTYPE</td>
        <td>PDO</td>
        <td>MySQL</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>目录规划</td>
        <td>SQL注入攻击</td>
        <td>Content-Type</td>
        <td></td>
    </tr>
</table>

##已解决的问题

* 多个文件里都连了数据库，如果密码变了，每个地方都要改，怎么办？

    使用配置文件即可。配置文件用什么格式？还记得php.ini吗？PHP原生支持ini格式。当然还可以使用php array格式，请自行了解。

* 访问index.php是正常网页，访问index.html是错误的，如何禁止访问模板等文件？

    建立htdocs目录，里面只放允许访问的页面，http服务器指向htdocs中，这样别的文件自然都不可访问了。

* 单引号能保存吗？会导致什么后果？

    SQL的值使用单引号或者双引号包起来，所以值里面的引号需要转义。PDO使用quote进行转义，请看htdocs/articles_add.php。如果不转义，会导致SQL注入漏洞，如果有人攻击，可以执行任何SQL，比如清空数据、获取用户资料等等。

![单引号实验成功](http://com-163-sinkcup-img-agc.qiniudn.com/pdo_quote.png)

##待解决的问题

* 文章不存在时显示的“查无此文”是html网页，txt模式时应该显示txt啊，如何实现呢？

    按照截图先自行实验，且听下回分解。

* 如何弹出下载？

    且听下回分解。

* 在内容中输入html代码会出现什么情况？

    按照截图先自行实验（发表，然后进入阅读），且听下回分解。

![txt报错实验](http://com-163-sinkcup-img-agc.qiniudn.com/need_txt_error.png)

![XSS实验](http://com-163-sinkcup-img-agc.qiniudn.com/xss.png)
