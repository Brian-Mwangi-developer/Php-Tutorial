<?php


class Product{
    private $price;
    private $weight;
    private $freeShipping =false;

    public function __construct($price,$weight){
        $this->weight =$weight;
        $this->price =$price;
    }
    function getWeight(){
        return $this->weight;
    }

    function setFreeShipping(){
        $this->freeShipping =true;
    }
    function getFreeShipping(){
       return $this->freeShipping;
    }

}

class Shipping{
    private $totalShipping;
    private $products;

    private $pricePerKilogram;

    public function __construct($pricePerKilogram){
        $this->pricePerKilogram =$pricePerKilogram;
    }
    public function addProduct(Product $product){
        $this->products[] =$product;
    }
    public function calculateTotalShipping(){
        foreach($this->products as $product){
            if(!$product->getFreeShipping()){
                $this->totalShipping +=$product->getWeight() * $this->pricePerKilogram;
            }
        }
    }
    public function getTotalShippingPrice(){
        return $this->totalShipping;
    }
}

$product = new Product(5,1);
$product1=new Product(6,2);
$product2=new Product(5,4);
$product2->setFreeShipping();

$pricePerKilogram =5;

$shipping =new Shipping($pricePerKilogram);

$shipping->addProduct($product);
$shipping->addProduct($product1);
$shipping->addProduct($product2);
$shipping->calculateTotalShipping();
$totalShippingPrice =$shipping->getTotalShippingPrice();

var_dump($totalShippingPrice);




// class Product {
//     //variables
//     private $price;
//     private $weight;

//     public function __construct($price, $weight){
//         $this->price = $price;
//         $this->weight = $weight;
//     }

//     function getWeight(){
//         return $this->weight;
//     }
// }

// class Shipping{
//     private $totalShipping;

//     public function calculateTotalShipping($weight,$pricePerKilogram){
//         return $weight * $pricePerKilogram;
//     }
// }

// $pricePerKilogram = 1.5;
// $product = new Product(5,3);
// $shipping = new Shipping();
// $totalShippingPrice = $shipping->calculateTotalShipping($product->getWeight(),$pricePerKilogram);

// var_dump($product->getWeight());
// var_dump($totalShippingPrice);