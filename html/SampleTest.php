<?php
use PHPUnit\Framework\TestCase;

require_once 'sample.php';

class SampleTest extends TestCase
{
    public function testSample()
    {
        $sample = new sample\Sample();

        // helloWorldの戻り値を確認
        $this->assertSame($sample->helloWorld(), 'こんにちは世界');
    }
}