<?php 

require_once '../core/route.php';

class RouterTest extends PHPUnit_Framework_TestCase {
    public function testPower() {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
    }
}

?>