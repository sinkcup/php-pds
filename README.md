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
    <tr>
        <td>XSS攻击</td>
        <td>面向过程</td>
        <td>别处理HTML</td>
        <td>Content-Disposition</td>
        <td></td>
    </tr>
</table>

##已解决的问题

* 文章不存在时显示的“查无此文”是html网页，txt模式时应该显示txt啊，如何实现呢？

    面向过程编程（POP），使用output函数统一输出即可。

* 如何弹出下载？

    使用Content-Disposition即可。

* 在内容中输入HTML代码会出现什么情况？

    “网页阅读”弹出了js警告，跳转到了别的网站，这就是“XSS攻击”。那说明这些代码在HTML网页中显示中是危险的，需要用htmlspecialchars转义后再显示。而“txt阅读”没问题，在数据库中也无需处理。切记：数据库别处理HTML，那是网页的事。

![XSS实验txt正常](http://com-163-sinkcup-img-agc.qiniudn.com/xss_txt.png)

![XSS实验HTML危险](http://com-163-sinkcup-img-agc.qiniudn.com/xss_html.png)

##待解决的问题

* 复制链接，改成一个不存在的id，比如asdf，提示文章不存在，但仍然弹出了下载，怎么办？

    且听下回分解。

* 下载的txt，在Windows系统里用记事本打开怎么乱码了？而用高级编辑器（Notepad++、EmEditor）打开没问题，手机也没问题。

    且听下回分解。

* txt模式也应该直接展示$output['data']，不该出现$output['data']['txt']这种冗余的数据。1种数据，多种展示，这样才规范，怎么实现？

    且听下回分解。

* 下载的txt都是1.txt、2.txt，不友好，能用小说标题作为文件名吗？

    先自行试验冒号、引号和点号能不能作为文件名，且听下下回分解。

![txt实验：不存在](http://com-163-sinkcup-img-agc.qiniudn.com/txt_not_exist.png)
