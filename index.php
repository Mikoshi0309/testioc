<?php
spl_autoload_register(function ($class) {
    require_once $class . '.class.php';
});

// 创建一个容器（后面称作超级工厂）
$container = new Container;
 
// 向该 超级工厂 添加 超人 的生产脚本
$container->bind('superman', function($container, $moduleName) {
    return new Superman($container->make($moduleName));
});
 
// 向该 超级工厂 添加 超能力模组 的生产脚本
$container->bind('xpower', function($container) {
    return new XPower;
});
 
// 同上
$container->bind('ultrabomb', function($container) {
    return new UltraBomb;
});
 
// ******************  华丽丽的分割线  **********************
// 开始启动生产
//$superman_1 = $container->make('superman', ['xpower']);
//$superman_2 = $container->make('superman', ['ultrabomb']);
$superman_3 = $container->make('superman', ['xpower']);
$superman_3->test();
// ...随意添加

?>