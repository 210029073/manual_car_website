<?php

namespace App\Http\Controllers;

class Product
{
    private string $model;

    private string $brand;

    private string $description;

    private float $price;

    function __construct(string $model, string $brand, string $description, float $price){
        $this->model = $model;
        $this->brand = $brand;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
