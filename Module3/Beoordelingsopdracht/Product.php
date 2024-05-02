<?php

namespace beord;

class Product
{
    private string $name;
    private string $description;
    private string $brand;
    private float $price;
    protected string $productType;

    public function __construct(string $name, string $description, string $brand, float $price, string $productType)
    {
        $this->name = $name;
        $this->description = $description;
        $this->brand = $brand;
        $this->price = $price;
        $this->productType = $productType;
    }


    public function getName()
    {

    }

    public function getDescription()
    {

    }

    public function getBrand()
    {

    }

    public function getPrice()
    {

    }

    protected function getProductType()
    {

    }

    public function productInfo()
    {
        return "<br><br>".$this->name.' <br>'.$this->description.' <br>'.$this->brand.' <br>'.$this->price.'<br>'.$this->productType.'<br>';
    }

    public function getInfo(): array
    {
        return [
            'Titel' => $this->name,
            'Maker' => $this->brand,
            'Beschrijving' =>$this->description,
            'Prijs' => $this->price,
            'Type' => $this->productType
        ];
    }


    public function printInfo()
    {
        $info = $this->getInfo();
        foreach ($info as $key => $value) {

            if (is_array($value)) {
                echo "$key: " . implode(", ", $value) . "<br>";
            } else {
                echo "$key: $value<br>";
            }
        }
    }


}