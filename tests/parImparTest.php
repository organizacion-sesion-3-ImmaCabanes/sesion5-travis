<?php
use PHPUnit\Framework\TestCase;
require 'parImpar.php';
class parImparTests extends TestCase
{
    private $parImpar;
 
    protected function setUp()
    {
        $this->parImpar = new parImpar();
    }
 
    protected function tearDown()
    {
        $this->parImpar = NULL;
    }
 
    public function testParImpar1()
    {
        $result = $this->parImpar->par(1);
        $this->assertEquals("impar", $result);
    }
   public function testParImpar2()
    {
        $result = $this->parImpar->par(2);
        $this->assertEquals("par", $result);
    }
   public function testParImpar3()
    {
        $result = $this->parImpar->par(3);
        $this->assertEquals("impar", $result);
    }
 
}
