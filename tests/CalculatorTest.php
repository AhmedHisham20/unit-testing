<?php
use PHPUnit\Framework\TestCase;

require './src/Calculator.php';

class CalculatorTest extends TestCase {

    public function testfactorial1(){
        $c =new Calculator;
        $result=$c->factorial(0);
        $this->assertEquals(1,$result);

    }
    public function testfactorial2(){
        $c =new Calculator;
        $result=$c->factorial(1);
        $this->assertEquals(1,$result);

    }
    public function testfactorial3(){
        $c =new Calculator;
        $result=$c->factorial(5);
        $this->assertEquals(120,$result);

    }
    public function testfactorial4(){
        $c =new Calculator;
        $result=$c->factorial(-3);
        $this->assertEquals(null,$result);

    }
    public function testfactorial5(){
        $c =new Calculator;
        $result=$c->factorial(1.5);
        $this->assertEquals(null,$result);

    }
    public function testfactorial6(){
        $c =new Calculator;
        $result=$c->factorial(false);
        $this->assertEquals(null,$result);

    }

    public function testfactorial7(){
        $c =new Calculator;
        $result=$c->factorial('abc');
        $this->assertEquals(null,$result);

    }

}






?>
