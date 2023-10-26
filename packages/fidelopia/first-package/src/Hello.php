<?php

namespace Fidelopia\FirstPackage;

class Hello
{
    protected string $name;

    public function __construct(string $name = "John")
    {
        $this->name = $name;
    }

    public function hello(): string
    {
        return "Well come {$this->name}";
    }
}
