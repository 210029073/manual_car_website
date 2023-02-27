<?php

namespace App\Http\Controllers;

use function Symfony\Component\String\s;

/***
 * Responsible for ordering records in php
 * @author Ibrahim Ahmad <210029073@aston.ac.uk>
 * @version 2.0
*/
class Order
{
    private int $id;
    private int $userId;
    private int $productsId;
    private float $price;
    private bool $status;
    private $deliveryDate;
    private $orderDate;

    function __construct(int $id, int $userId, int $productsId, int $price, $deliveryDate, $orderDate, bool $status) {
        $this->id = $id;
        $this->userId = $userId;
        $this->productsId = $productsId;
        $this->price = $price;
        $this->deliveryDate = $deliveryDate;
        $this->orderDate = $orderDate;
        $this->status = $status; //must be approved first
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getProductsId(): int
    {
        return $this->productsId;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

}
