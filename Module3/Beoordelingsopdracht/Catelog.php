<?php

namespace beord;

class Catelog
{
    private array $products = [];

    public function addProduct(Game|Music|Movie $products): string
    {
        $this->products[] = $products;
        return $products->productInfo();
    }

    public function removeProduct(Game|Music|Movie $product): string
    {
        $key = array_search($product, $this->products);
        if ($key !== false) {
            unset($this->products[$key]);
            return $product->productInfo();
        }
        return $product->productInfo();
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getAveragePrice(): float
    {
        $totalPrice = 0;
        $count = count($this->products);
        foreach ($this->products as $product){
            $totalPrice += $product->getPrice();
        }
        $average = $totalPrice / $count;
        return number_format($average, 2);
    }

    
    
}