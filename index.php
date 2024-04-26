<?php

// --cllass
// --property
// -method
// -objection

class Test {  //class

    const CONSTVAR = 12;
    const CONSTVAR2 = 12;

    public $testProp;    //property
    private $privateProp = 25;
    protected $protectedProp = 50;
    public static $staticProp = 100;

    public function testFunction() {  //method
        echo "test function";
        $this::CONSTVAR;
        echo self::$staticProp;
    }
}

$obj = new Test(); //object

$obj->testFunction(); //call object function

echo Test::$staticProp;

class Stripe extends Test {
    public $prop = 3;

    public function stripePaymentMethod($num) {
        return $this->protectedProp + $num + $this->prop + $this->stripePayment2();
    }

    public function stripePayment2() {
        return 25;
    }

    public function stripePayment3() {
        return $this->stripePayment2();
    }
}


$obj1 = new Stripe(); //object

$obj1->testFunction();


class Third extends Stripe {

}