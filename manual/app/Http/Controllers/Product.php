<?php

namespace App\Http\Controllers;

/**
 * Models a product entity for the basket
 * @author Ibrahim Ahmad <210029073@aston.ac.uk>
 * @since 18-02-2023
 * @version 1.1.0
 */
class Product
{
    private int $id;

    private string $model;

    private string $brand;

    private string $description;

    private float $price;

    function __construct(int $id, string $model, string $brand, string $description, float $price){
        $this->id = $id;
        $this->model = $model;
        $this->brand = $brand;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * This will return the price tag.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * This will return the model of the product
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * This will return the brand of the product.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * This will return the description of the product
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * This will return the id of the product.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
