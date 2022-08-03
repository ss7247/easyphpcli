# easyphpcli
EasyPhpCli--使用你熟悉的PHP框架写脚本,魔改PHP所有框架支持CLI运行  


### 为什么有这种想法？

PHP 有很多 好的PHP框架，实现了很多好的封装库， 但在命令行的时候，只能写原生的PHP代码，很难利用PHP框架的优势


### 使用步骤：
```
1. 在入口文件

// 判断是否CLI模式
if (PHP_SAPI == 'cli') {
	// 将CLI模式的传参写入全局变量
	$GLOBALS['argv'] = $argv;
}

2. 在框架默认的控制器里引入文件

// 判断是否CLI模式
if (PHP_SAPI == 'cli') {
	// 引入 需要实现 CLI 功能	
	require_once easyphpcli.php
}

3. 写入你的功能逻辑

在 easyphpcli.php 写入你想用CLI 现实的功能 

4. 在命令行中调用

// 脚本自动添加用户
php index.php  add user

// 脚本自动删除用户
php index.php  del user_id 10


...

根据需要，可以修改easyphpcli.php,无限扩展传参
```
更多使用方法，可以自己悟

这个项目代码简单，功能简单，只是提供了一种使用命令行脚本运行的思路，可以使用你熟悉的PHP框架写脚本，写代码与维护至少提升几个量级吧
