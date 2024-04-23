<?php

// --cllass
// --property
// -method
// -objection

class Test {  //class

    public $testProp;    //property
    private $privateProp;
    protected $protectedProp;

    public function testFunction() {  //method
        echo "test function";
    }

}

$obj = new Test(); //object

$obj->testFunction(); //call object function