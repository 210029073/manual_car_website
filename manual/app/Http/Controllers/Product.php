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

    private float $engineCapacity;

    private string $transmission;

    private int $quantity;

    private string $imagePath;

    function __construct(int $id, string $model, string $brand, string $description, float $price, float $engineCapacity, string $transmission, int $quantity){
        $this->id = $id;
        $this->model = $model;
        $this->brand = $brand;
        $this->description = $description;
        $this->price = $price;
        $this->engineCapacity = $engineCapacity;
        $this->transmission = $transmission;
        $this->quantity = $quantity;
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

    /**
     * This will return the quantity of the product
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * This will set the quantity of the product in inventory.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * This will return the transmission type of the vehicle.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return string
     */
    public function getTransmission(): string
    {
        return $this->transmission;
    }

    /**
     * This will return the engine capacity of the vehicle
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return float
     */
    public function getEngineCapacity(): float
    {
        return $this->engineCapacity;
    }

    /**
     * @param string $imagePath
     */
    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }
}
