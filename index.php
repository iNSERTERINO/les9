<?php
class Car{
    public $carBrand;
    public $carColor;
    public $carPrice;
    public function getDiscount($i){
        $this->carPrice = $this->carPrice - ($this->carPrice / 100 * $i);
    }
    public function __construct()
    {
        $this->carColor = 'White';
    }
}
$car1 = new Car();
$car1->carBrand = 'Mercedes';
$car1->carPrice = 150000;
$car2 = new Car();
$car2->carBrand = 'BMW';
$car2->carPrice = 120000;
$car3 = new Car();
$car3->carBrand = 'Wolsvagen';
$car3->carColor = 'Red';
$car3->carPrice = 110000;
$car1->getDiscount(10);
class Tv{
    public $tvBrand;
    public $tvSize;
    public function __construct($Brand, $Size)
    {
        $this->tvBrand = $Brand;
        $this->tvSize = $Size;
    }
}
$tv1 = new Tv('Samsung', 24);
$tv2 = new Tv('Sony',20);
class Pen{
    public $penBrand;
    public $penColor;
    public $penWidth;
    public function __construct($Brand, $Color, $Width)
    {
        $this->penBrand = $Brand;
        $this->penColor = $Color;
        $this->penWidth = $Width;
    }
}
$pen1 = new Pen('Dunhill','Blue',0.25);
$pen2 = new Pen('Cross', 'Blue', 0.5);
$pen3 = new Pen('Rotring', 'Black', 0.5);
class Duck{
    public $duckName;
    public $duckAge;
    public function __construct($Name, $Age)
    {
        $this->duckName = $Name;
        $this->duckAge = $Age;
    }
}
$duck1 = new Duck("Mike",3);
$duck2 = new Duck('Donald', 2);
class Product{
    public $productCategory;
    public $productName;
    public $productPrice;
    public $productDescription;
    public function __construct($Category, $Name, $Price, $Description)
    {
        $this->productCategory = $Category;
        $this->productName = $Name;
        $this->productPrice = $Price;
        $this->productDescription = $Description;
    }
}
$product1 = new Product('Смартфоны', 'Samsung s8','1500','Флагман бренда Samsung');
$product2 = new Product('Мониторы', 'Asus','1400','Монитор с частотой 144hz');
