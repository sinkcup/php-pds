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
    <tr>
        <td>Form自动\r\n</td>
        <td>登录：Session</td>
        <td></td>
        <td>必须\r\n</td>
        <td>EOL、EOF</td>
    </tr>
</table>

##已解决的问题

* 如何注册、登录、只允许登录的人发表文章？

    且听下回分解。

* txt模式也应该直接展示$output['data']，不该出现$output['data']['txt']这种冗余的数据。1种数据，多种展示，这样才规范，怎么实现？

    模板有多种，html有模板，txt也可以有模板。

* 下载的txt，在Windows系统里用记事本打开怎么每段之间没换行？而用高级编辑器（Notepad++、EmEditor）打开没问题，手机也没问题。

    各个OS的换行符EOL（end of line）不一样，EOF也不一样，所以程序处理即可。爱折腾电脑的人可能知道，如果不知道这些计算机常识，请自行学习并折腾：http://zh.wikipedia.org/wiki/%E6%8F%9B%E8%A1%8C

##待解决的问题

* Session与cookie有什么区别？

    且听下回分解。
