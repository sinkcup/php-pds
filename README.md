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
        <td>语义化：最简HTML</td>
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
</table>

##已解决的问题

* PHP和HTML混写，很乱啊，怎么解决？

    把HTML单独保存，PHP中require即可，这样就实现了表现与业务逻辑分离。

* 保存之后，在Firefox中页面怎么乱码了？

    HTTP协议中有header，其中Content-Type用于指定是网页、文本还是json等等，编码推荐使用utf-8。如何查看header？Chrome/Firefox浏览器——》F12——》网络，或者命令行curl -i即可。

* 用文件行吗？是不是要用数据库？

    有多种方式可以保存数据，比如：文件、单机数据库（SQLite）、网络数据库（MySQL、MariaDB、Oracle）。根据场景来选择，请自行学习。互联网技术公司做网站一般使用MySQL。

* ANSI与ASCII的区别，utf-8与unicode的区别，GB2312、GBK、GB18030是什么，GBK与CP936的区别，为什么技术公司的程序（Android、iOS、Linux、OS X、Windows）都使用Unicode？

    请自行学习。

##待解决的问题

* 如何用PHP操作MySQL数据库？

    且听下回分解。

* HTML页面开头的xml version，DOCTYPE html后面的网址记不住啊，可以不写吗？

    且听下回分解。
