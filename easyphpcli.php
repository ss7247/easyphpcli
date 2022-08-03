<?php
/**
 * 使用步骤：

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
php index.php  add

// 脚本自动删除用户
php index.php  del user_id 10

 */

// 不是 CLI 模式，直接返回
if(PHP_SAPI != 'cli') return false;

// 获得 CLI 模式下所有参数
$argv = $GLOBALS['argv'];
// 获得CLI 模式下参数总和
$count = count($argv);
// 需要调用的方法
$action = ($count>1)?$argv[1]:'';

switch($action) {
    case 'add':
        // 添加操作
        echo $action;
        /**
         *  这一块的代码 可以直接使用你框架的所有内容，包括常量，函数等
         *  如 ： echo  C('APP_PATH');
         *  也可以直接跳转到别的控制器
         *  总之 你可以 随心所遇的 在CLI 模式调用框架的内容，不会因为 nginx等web服务器超时 
         */
    break;
    case 'del':
        // 删除操作
        echo $action;
     break;
    default:
        // 默认操作
        echo 'default';
    break;
}

// 运行完成后结束
exit;


















































