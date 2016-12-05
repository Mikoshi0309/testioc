<?php
spl_autoload_register(function ($class) {
    require_once $class . '.class.php';
});

// ����һ�������������������������
$container = new Container;
 
// ��� �������� ��� ���� �������ű�
$container->bind('superman', function($container, $moduleName) {
    return new Superman($container->make($moduleName));
});
 
// ��� �������� ��� ������ģ�� �������ű�
$container->bind('xpower', function($container) {
    return new XPower;
});
 
// ͬ��
$container->bind('ultrabomb', function($container) {
    return new UltraBomb;
});
 
// ******************  �������ķָ���  **********************
// ��ʼ��������
//$superman_1 = $container->make('superman', ['xpower']);
//$superman_2 = $container->make('superman', ['ultrabomb']);
$superman_3 = $container->make('superman', ['xpower']);
$superman_3->test();
// ...�������

?>