# Comment简介:
键盘怪的公众号没有评论功能,这是很不方便的.所以要创建一个专门的评论区,这样就可以愉快地
交流了😄
			- 后期可能考虑添加的功能:
			- 验证码识别(主要是为了防止恶意灌水) 
			- 注册登陆后有一个指定的账户后才能进行评论
## 💡 IDEA
	- 增加管理界面(便于管理留言信息) ❓
		1. 管理员可以对留言信息进行审核
	
	
## 📌版本更新
	记录每个版本更新的内容或修复的bug,以便于查看和维护
### 📍[Comment 【1.0】] 2019.5.25
	上线最基础版的comment.主要介绍:
	- 基于bootstrap,jquery加载页面特效
	- 内容为空时以及发布成功之后会弹出提示
	- 完全匿名评论(只需要输入内容即可提交评论信息)
	- 采用虚伪ajax技术,实际上只有发布内容时提交的信息是ajax,内容获取则没有.
	
[comment_1.0界面截图](https://s2.ax1x.com/2019/05/27/VVBcX4.png)
### 📍[Comment 0.5(Beta)] 2019.5.23
1. 前端-
	- 评论区页面设计✔
			样式基于bootstrap,jquery
			适应手机设备
2. 后端-
	- 建立数据库表**message**用于存储和读取内容
	- 发布内容处理逻辑页面issue.php
### 📍[Comment 0.1(Beta)] 2019.5.17
1. 前端-
	- 完成登陆界面设计
	- 完成注册界面设计
2. 后端-
	- 数据库建立userdb 表user
	- 实现登陆注册功能 reg.php main.php

### 📍[Comment 0.0(Beta)] 2019.5.15

1. 测试Git版本控制的可行性
2. 开始实现评论功能comment
3. 注册界面完成

