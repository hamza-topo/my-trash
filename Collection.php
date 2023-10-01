<?php

class Collection
{
    private $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function filter(callable $callback)
    {
        return new self(array_filter($this->items, $callback));
    }

    public function map(callable $callback)
    {
        return new self(array_map($callback, $this->items));
    }

    public function sum()
    {
        return array_sum($this->items);
    }

    public function toArray()
    {
        return $this->items;
    }
}
