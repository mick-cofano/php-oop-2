<?php

  class Product {

    protected $name;

    protected $price;

    protected $brand;

    protected $model;

    public function __construct(string $name, float $price, string $brand, string $model) {
      $this->name = $name;
      $this->price = $price;
      $this->brand = $brand;
      $this->model = $model;
    }

  }

  class Clothing extends Product {

    protected $size;

    public function __construct(string $size) {
      $this->size = $size;
    }

  }

  class Electronic extends Product {

    protected $specs;

    public function __construct(string $specs) {
      $this->specs = $specs;
    }

  }

  // class Shop {
  //
  //   protected $shopName;
  //
  //   protected $products = [];
  //
  //   public function __construct($shopName) {
  //     $this->shopName = $shopname;
  //   }
  //
  //   public function addProduct(Product $product) {
  //     $this->products[] = $product;
  //   }
  //
  //   public function getProducts() {
  //     return $this->products;
  //   }
  // }



  $nikeAir = new Clothing('Nike Air', '99,90€', 'Nike', 'Air Force One 2021 edition', 'From 33 to 48');
  echo $nikeAir->name;
  $nvidia = new Electronic('nVidia GeForce', '1700€', 'nVidia', 'GeForce 3080', 'RAM: 10GB GDDR6X - Max Resolution: 7680x4320 - Ports: HDMI 2.1, DisplayPort 1.4a (3x)');
  echo $nvidia->name;

  // $shop = new Shop('Amazon');
  // $shop->addProduct($nikeAir);
  // $shop->addProduct($nvidia);
  //
  //   echo "<pre>";
  //     print_r($shop->getProducts());
  //   echo "</pre>";
 ?>
