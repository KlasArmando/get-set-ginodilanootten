<?php
class Product {
    public $name;
    public $price;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }
}
$product1 = new Product('koelkast');
$product2 = new Product('droger');
$product3 = new Product('wasmachine');
$product1->setPrice($_POST['prijs1']);
$product2->setPrice($_POST['prijs2']);
$product3->setPrice($_POST['prijs3']);
echo "Bon aangemaakt op: " . (new DateTime())->format('d-m-Y') . "<br>";
echo $product1->name . ":  €" . $product1->price . "<br>";
echo $product2->name . ":  €" . $product2->price . "<br>";
echo $product3->name . ":  €" . $product3->price . "<br>";
$totaalexc = $product1->price + $product2->price + $product3->price;
$totaalinc = $totaalexc * 1.21;
echo "Exc btw :  €" . $totaalexc . "<br>";
echo "Inc btw :  €" . $totaalinc;

?>