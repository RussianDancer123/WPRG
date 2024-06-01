<?php
namespace zad2;

class Cart
{
    private $products;

    public function __construct(){
        $this->products = array();
    }

    public function addProduct(Product $product): void{
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void{
        $key = array_search($product, $this->products);
        if($key !== false){
            unset($this->products[$key]);
        }
    }

    public function getTotal(): float{
        $total = 0;
        foreach($this->products as $product){
            $total += $product->getPrice()*$product->getQuantity();
        }
        return $total;
    }

    public function __toString(): string{
        $str = "Products in cart:<br>";
        foreach($this->products as $product)
            $str .= $product."<br>";
        $str .= "Total price: ".$this->getTotal();
        return $str;
    }
}

//----------------
include("Product.php");
$c = new Cart();
$p = new Product("Zad 3", 200, 1);
$c->addProduct(new Product("Zad 2", 200, 2));
$c->addProduct($p);
$c->addProduct(new Product("Zad 4", 400, 1));

echo $c."<br><br>";
$c->removeProduct($p);
echo $c;
?>