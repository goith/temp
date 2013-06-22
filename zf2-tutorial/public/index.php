<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
/* chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
 */
//上面的改成下面的：方便调试、错误
/**
 * Display all errors when APPLICATION_ENV is development.
 */
//if ($_SERVER['APPLICATION_ENV'] == 'development') {
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
//}

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
// run() : MVC启动阶段
/* 启动阶段对应的事件有:
   route 路由
   dispatch 分发
 */
Zend\Mvc\Application::init(require 'config/application.config.php')->run();