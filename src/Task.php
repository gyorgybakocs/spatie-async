<?php

namespace Spatie\Async;

abstract class Task
{
    public function __construct(...$args) {
        foreach ($args as $key => $value) {
            $this->{$key} = $value;
        }
    }

    abstract public function configure();

    abstract public function run();

    public function __invoke()
    {
        $this->configure();

        return $this->run();
    }
}
