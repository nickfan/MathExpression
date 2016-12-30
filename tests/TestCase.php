<?php

namespace Nickfan\MathExpression\Tests;

use Nickfan\MathExpression\Math;

class TestCase extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        parent::setUp();
        require_once __DIR__.'/../vendor/autoload.php';
    }
    public function tearDown()
    {
        parent::tearDown();
    }

    public function testDefault()
    {
        $math = new Math();
        $answer = $math->evaluate('(2 + 3) * 4');
        $this->assertEquals(20,$answer);
        $answer = $math->evaluate('1 + 2 * ((3 + 4) * 5 + 6)');
        $this->assertEquals(83,$answer);
        $answer = $math->evaluate('(1 + 2) * (3 + 4) * (5 + 6)');
        $this->assertEquals(231,$answer);
        $answer = $math->evaluate('(1 + 2) * (3 + 4) * (5 + 6)');
    }
    public function testVariables(){
        $math = new Math();
        $math->registerVariable('a', 4);
        $answer = $math->evaluate('($a + 3) * 4');
        $this->assertEquals(28,$answer);

        $math->registerVariable('a', 5);
        $answer = $math->evaluate('($a + $a) * 4');
        $this->assertEquals(40,$answer);
    }
}
