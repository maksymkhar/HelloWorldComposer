<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 6/10/15
 * Time: 19:32
 */

//require __DIR__ . "/src/Hello.php";
require __DIR__ . "/vendor/autoload.php";

use Com\Iesebre\Dam2\max\HelloWorldComposer\Hello;

$greetings = new Hello();
$greetings->sayHello();