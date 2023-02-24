<?php

namespace App\Http\Controllers;

class Order
{
    private int $id;
    private int $userId;
    private int $productsId;
    private float $price;
    private $deliveryDate;
    private $orderDate;

    function __construct(int $id, int $userId, int $productsId, int $price, $deliveryDate, $orderDate) {
        $this->id = $id;
        $this->userId = $userId;
        $this->productsId = $productsId;
        $this->price = $price;
        $this->deliveryDate = $deliveryDate;
        $this->orderDate = $orderDate;
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

}
