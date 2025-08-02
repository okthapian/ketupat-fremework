<?php

class Arr implements ArrayAccess, IteratorAggregate, Countable
{
    protected array $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public static function make(array $items = []): self
    {
        return new static($items);
    }

    public function all(): array
    {
        return $this->items;
    }

    public function map(callable $callback): self
    {
        return new static(array_map($callback, $this->items));
    }

    public function filter(callable $callback = null): self
    {
        return new static(array_filter($this->items, $callback));
    }

    public function reduce(callable $callback, $initial = null)
    {
        return array_reduce($this->items, $callback, $initial);
    }

    public function each(callable $callback): self
    {
        foreach ($this->items as $key => $value) {
            $callback($value, $key);
        }
        return $this;
    }

    public function pluck(string $key): self
    {
        return new static(array_map(fn($item) => is_array($item) ? $item[$key] ?? null : null, $this->items));
    }

    public function where(string $key, $operator, $value = null): self
    {
        $value === null && [$operator, $value] = ['=', $operator];

        return new static(array_filter($this->items, function ($item) use ($key, $operator, $value) {
            $actual = is_array($item) ? $item[$key] ?? null : null;
            return match ($operator) {
                '=', '==' => $actual == $value,
                '!=', '<>' => $actual != $value,
                '<' => $actual < $value,
                '>' => $actual > $value,
                '<=' => $actual <= $value,
                '>=' => $actual >= $value,
                default => false,
            };
        }));
    }

    public function first(callable $callback = null, $default = null)
    {
        foreach ($this->items as $key => $item) {
            if (!$callback || $callback($item, $key)) {
                return $item;
            }
        }
        return $default;
    }

    public function last()
    {
        return end($this->items);
    }

    public function sort(callable $callback = null): self
    {
        $items = $this->items;
        $callback ? uasort($items, $callback) : asort($items);
        return new static($items);
    }

    public function values(): self
    {
        return new static(array_values($this->items));
    }

    public function keys(): self
    {
        return new static(array_keys($this->items));
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    public function toJson(): string
    {
        return json_encode($this->items);
    }

    // Implement interfaces
    public function offsetExists($offset): bool
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return $this->items[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void
    {
        $offset === null
            ? $this->items[] = $value
            : $this->items[$offset] = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->items[$offset]);
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}
