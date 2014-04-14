<?php

require '../Class.Currency.php';
class CurrencyTest extends PHPUnit_Framework_TestCase {
    /**
     * @var Currency
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this -> object = new Currency;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        unset($this -> object);
    }

    /**
     * @dataProvider EGprovider
     */
    public function testEg($param, $expected) {

        $this -> assertEquals($expected, trim($this -> object ->Eg($param)));
    }

    public function EGprovider() {
        $val1 = "ثلاثة آلاف و خمسة مائة جنيها  فقط لاغير";
        $val2 = "خمسة مائة وتسعون جنيها   و ستون قرشا  فقط لاغير ";
        return array( array(3500, trim($val1)), array(590.60, trim($val2)), );

    }

    /**
     * @dataProvider SAprovider
     */
    public function testSa($param, $expected) {
       $this->assertEquals($expected, trim($this->object ->Sa($param)));
     
    }
       
    
  public function SAprovider() {
    $val1 = " ثلاثة آلاف و خمسة مائة ريال فقط لاغير  ";
   $val2 = " خمسة مائة وتسعون ريال  و ستون هللة فقط لاغير";
   return array( array(3500, trim($val1)), array(590.60, trim($val2)), );

 }
    

}
