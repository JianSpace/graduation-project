# graduation-project
backups...
##介绍
前端都是JavaScript和jQuery，css用了Sass，后端&数据库用PHP+MySQL，两个模块用PHP输出了json，Ajax读取数据再改DOM。主要是开始写毕设的时候水平不怎么好（现在也不怎么好sad），技术栈有点差。因为之前想尝试下微软的编辑器——Visual Studio Code，结果不小心点错把毕设清空了。。幸好是用高中时存的一个数据恢复软件恢复了，想想还是备份下。

平常因为自己写的东西太烂，实在是不怎么好意思放到上面2333。

### 注册(使用Ajax和正则验证)<br>

![](https://github.com/JianSpace/graduation-project/blob/master/screenshot/register.png)
### 答题（读取json数据，一个简单的SPA）<br>

![](https://github.com/JianSpace/graduation-project/blob/master/screenshot/exam.png)

答题这里有个有趣的地方可以代替if/switch语句，之前在一个博客上看到的。
<pre><code>var item_transform = {"A":"0","B":"1","C":'2',"D":'3','':''}
item_num = item_transform[saveSelectedData[num]];</pre></code>
像上面这样两行，就不必用多个if语句或者switch语句来判定了。用数组匹配恰到好处，只要两行就ok。

### 管理（用Bootstrap拼起来）<br>

![](https://github.com/JianSpace/graduation-project/blob/master/screenshot/admin.png)

没什么技术含量，纯粹copy and paste，数据也是直接用PHP echo到HTML里的。
