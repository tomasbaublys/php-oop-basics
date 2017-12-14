<?php 

require 'StockItem.php';

class Product {
	private $stockItem;
	private $sku;

	public function __construct($sku, StockItem $stockItem)
	{
		$this->stockItem = $stockItem;
		$this->sku = $sku;
	}

	public function getStockIem()
	{
		return $this->stockItem;
	}

	public function getSku()
	{
		return $this->sku;
	}
}

$item = new StockItem(2, 0);

$product =  new Product(1, $item);

var_dump($product);



