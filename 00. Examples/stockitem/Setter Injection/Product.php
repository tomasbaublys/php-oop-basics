<?php 

require 'StockItem.php';

class Product {
  private $stockItem;
  private $sku;
  
  public function __construct($sku){
    $this->sku        = $sku;
  }
  
  public function getStockItem(){
    return $this->stockItem;
  }
  
  public function getSku(){
    return $this->sku;
  }
  
  public function setStockItem(StockItem $stockItem){
    $this->stockItem = $stockItem;
  }
}

$item = new StockItem(2, 0);
$product =  new Product(1);
$product->setStockItem($item);

var_dump($product);



