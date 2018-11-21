<?php

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', false);

// 定义应用目录
define('APP_PATH','./');

// 关闭自动生动index.html
define('BUILD_DIR_SECURE', true);

// 域名 https 和 http
define('HTTPS_DOMAIN', 'https://localhost/');
define('HTTP_DOMAIN', 'http://localhost/');

// API 地址：
define('API_HOST', HTTPS_DOMAIN.'API/Api/');

// 总平台地址
define('ADMIN_HOST', HTTP_DOMAIN.'Admin/');

// 文件上传地址：
define('FILE_HOST', API_HOST.'Upload/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单