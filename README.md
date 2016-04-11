# graduation-project
backups...
## 注册(使用Ajax和正则验证)<br>
![](https://github.com/JianSpace/graduation-project/blob/master/screenshot/register.png)
## 答题（读取json数据，一个简单的SPA）<br>
![](https://github.com/JianSpace/graduation-project/blob/master/screenshot/exam.png)

答题这里有个有趣的地方可以代替if/switch语句，之前在一个博客上看到的。
<pre><code>var item_transform = {"A":"0","B":"1","C":'2',"D":'3','':''}
item_num = item_transform[saveSelectedData[num]];</pre></code>
像上面这样两行，就不用用多个if语句或者switch语句来判定了。用数组读恰到好处，只要两行就ok。
