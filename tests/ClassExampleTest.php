<?php

declare(strict_types=1);

use Remarkablemark\ComposerTemplate\ClassExample;

it('says "Hello, world!"', function (): void {
    $example = new ClassExample();
    expect($example->say())->toBe('Hello, world!');
});

it('says "Hello, Mark!"', function (): void {
    $example = new \Remarkablemark\ComposerTemplate\ClassExample();
    expect($example->say('Mark'))->toBe('Hello, Mark!');
});
