<?php
class ATest extends \PHPUnit_Framework_TestCase
{
    const MY_CONST = BTest::SOME_CONST;


    public function testA()
    {
        $this->assertSame('aaa', self::MY_CONST);
    }
}
