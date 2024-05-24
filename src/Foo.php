<?php

namespace Example;

class Foo
{
    public function __construct(private Bar $bar){}
    public function runBar(): void
    {
        $this->bar->run();
    }
}