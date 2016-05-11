<?php
class BTest extends \PHPUnit_Framework_TestCase
{
    const SOME_CONST = 'aaa';


    public function testA()
    {
        $this->assertSame('aaa', self::SOME_CONST);
    }
}
