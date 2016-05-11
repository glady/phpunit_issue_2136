<?php

class Issue2136Test extends \PHPUnit_Framework_TestCase
{

    public function testAutoloadedTestClass()
    {
        $suite = new \PHPUnit_Framework_TestSuite(
            'DontSkipAutoloadedClass'
        );
        $suite->addTestFile(__DIR__ . '/ATest.php');
        $suite->addTestFile(__DIR__ . '/BTest.php');
        $result = $suite->run();

        $this->assertEquals(2, count($result));

    }
}
