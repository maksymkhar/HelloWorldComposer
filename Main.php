<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 6/10/15
 * Time: 19:32
 */

require __DIR__ . "/Hello.php";
require __DIR__ . "/vendor/autoload.php";

$greetings = new Hello();
$greetings->sayHello();