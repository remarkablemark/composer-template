<?php

declare(strict_types=1);

namespace Remarkablemark\ComposerTemplate;

class ClassExample
{
    public function say(string $name = 'world'): string
    {
        return "Hello, {$name}!";
    }
}
