<?php

namespace Dedoc\Scramble\Support\Generator;

class Path
{
    public string $path;

    /** @var array<string, Operation> */
    public array $operations = [];

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public static function make(string $path)
    {
        return new self($path);
    }

    public function addOperation(Operation $operationBuilder)
    {
        $this->operations[$operationBuilder->method] = $operationBuilder;

        return $this;
    }

    public function toArray()
    {
        $result = [];

        foreach ($this->operations as $method => $operation) {
            $result[$method] = $operation->toArray();
        }

        return $result;
    }
}
