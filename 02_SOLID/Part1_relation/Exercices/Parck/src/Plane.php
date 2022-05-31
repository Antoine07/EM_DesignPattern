<?php

namespace Parck;

class Plane implements Vehicule{

    protected $category;

    public function setCategory(string $category):void{

        $this->category = $category;
    }

    public function speed(): float{
        return 100;
    }
     public function __toString(): string{
         return "Name {$this->getName()} speed {$this->getSpeed()}  place{$this->getPlace()}";
     }
}