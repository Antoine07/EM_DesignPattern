<?php

namespace Parck;

abstract class Vehicule
{

    public function __construct(private string $status, private string $name, private  string $engine)
    {
    }

    abstract public function speed(): float;
    abstract public function __toString(): string;

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of engine
     */ 
    public function getEngine()
    {
        return $this->engine;
    }
}
