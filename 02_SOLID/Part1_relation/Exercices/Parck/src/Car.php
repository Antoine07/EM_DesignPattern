<?php

namespace Parck;

final class Car implements Vehicule{

    public function park(string $name, string $place):void{
        $this->name = $name;
        $this->place = $place;
    }

     public function speed(): float{
        return 100;
    }
     public function __toString(): string{
         return "Name {$this->name} speed {$this->speed}  place{$this->place}";
     }
}