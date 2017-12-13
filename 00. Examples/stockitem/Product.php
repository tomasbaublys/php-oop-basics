<?php 

require 'Stockitem.php';

class Product {
	private $stockItem;
	private $sku;

	public function __construct($sku, StockItem $stockItem)
	{
		$this->stockItem = StockItem;
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
