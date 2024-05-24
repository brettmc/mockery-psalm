<?php

use Example\Bar;
use Example\Foo;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Mockery\MockInterface;

class FooTest extends MockeryTestCase
{
    public function testSpy(): void
    {
        /** @var MockInterface&Bar $bar */
        $bar = Mockery::spy(Bar::class);
        $foo = new Foo($bar);
        $foo->runBar();

        $bar->shouldHaveReceived('run')
            ->once();
    }
}