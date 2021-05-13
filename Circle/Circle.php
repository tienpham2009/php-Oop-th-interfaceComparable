<?php

namespace Circles;

class Circle
{
    public float|int $radius;
    public string $name;

    public function __construct(string $name,
                                float|int $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

}