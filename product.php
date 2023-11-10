<?php

class Product {

    private int $id;
    private string $name;
    private float $price;

    public function __construct( $id, $name, $price ) {

        $this->id    = $id;
        $this->name  = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {

        return "$".number_format( $this->price, 2 );
    }

    public function showDetails() {

        echo "Product Details:".PHP_EOL;
        echo "- ID: {$this->id}".PHP_EOL;
        echo "- Name: {$this->name}".PHP_EOL;
        // echo "- Price: {$this->getFormattedPrice()}".PHP_EOL;
        echo "- Price: ".$this->getFormattedPrice().PHP_EOL;
    }

}

$cart = new Product( 1, "T-Shirt", 19.99 );
$cart->showDetails();

?>