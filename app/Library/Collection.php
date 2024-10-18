<?php

namespace App\Library;

class Collection
{
    protected array $items;
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function map(callable $callback)
    {
        return new static(array_map($callback, $this->items));
    }

    public function filter(callable $callback)
    {
        return new static(array_filter($this->items, $callback));
    }

    public function pluck(string $field)
    {
        // return $this->map(function($item) use ($field){ return $item[$field]; });
        return $this->map(fn($item) => $item[$field] );
    }

    public function sum()
    {
        return array_sum($this->items);
    }

    public function isEmpty()
    {
        return empty($this->items);
    
    }
    public function isNotEmpty()
    {
        return !$this->isEmpty();
    }

    public function contains(string $field, string|int $value)
    {
        // return $this->filter(function($item) use ($field, $value){ return $item[$field] == $value; });
        //return !$this->filter(fn($item) => $item[$field] == $value); // minha solução que deu errado
        return !!$this->filter(fn($item) => $item[$field] == $value)->items; //solução do curso
    }

    public function get()
    {
        return $this->items;
    }
}