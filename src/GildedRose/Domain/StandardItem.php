<?php

namespace Katas\GildedRose\Domain;

class StandardItem
{
    public function __construct(public string $name, public int $sell_in, public int $quality)
    {
        if($this->quality < 0){
            $this->quality = 0;
        } elseif ($this->quality > 50) {
            $this->quality = 50;
        }
    }

    public function update()
    {
        $this->sell_in--;

        if($this->quality > 0){
            $this->quality--;
        }

        if ($this->sell_in < 0 && $this->quality > 0) {
            $this->quality--;
        }
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}
