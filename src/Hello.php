<?php

namespace Com\Iesebre\Dam2\max\HelloWorldComposer;
use Faker\Factory;

/**
 * Created by PhpStorm.
 * User: max
 * Date: 6/10/15
 * Time: 19:31
 */

class Hello
{

    public $faker;

    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function sayHello()
    {
        echo "Hola versio 3! Hem dic " . $this->faker->name . "!\n";
    }

}
