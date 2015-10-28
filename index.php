<?php
/**
 * Created by PhpStorm.
 * User: mnemonic
 * Date: 15/10/15
 * Time: 18:56
 */

require __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

echo "testando";

phpinfo();

?>
