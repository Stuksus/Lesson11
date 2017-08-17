<?php


class Bucket
{
    public $productName = [];
    public $productPrice = [];
    public $productWeight = [];




    public function setProductName($productName)
    {
        $this->productName[] = $productName;
    }



    public function setProductPrice($productPrice)
    {
        $this->productPrice[] = $productPrice;
    }


    public function setProductWeight($productWeight)
    {
        $this->productWeight[] = $productWeight;
    }


}