<?php

include_once './vendor/autoload.php';

use Paragon\Models\Sale;
use Paragon\Models\Product;
use Paragon\Libs\ABA;
use Paragon\Libs\Wing;
use Paragon\Libs\PiPay;

echo '<h1>Start Week 4 Demo</h1>';

$sales = [
    new Sale(new ABA(), new Product('item 1', 1, 5)),
    new Sale(new Wing(), new Product('item 2', 2, 6)),
    new Sale(new ABA(), new Product('item 3', 1, 4)),
    new Sale(new ABA(), new Product('item 4', 1, 5)),
    new Sale(new PiPay(), new Product('item 5', 1, 7)),
    new Sale(new ABA(), new Product('item 6', 1, 10)),
    new Sale(new Wing(), new Product('item 7', 1, 15)),
    new Sale(new Wing(), new Product('item 8', 1, 2))
];

echo '<p>Sale List</p>';
echo displaySalesAsTable($sales);

echo '<p>1. Number of sales by ABA method: ' . solve1($sales) . '</p>';
echo '<p>2. Number of sales by PiPay and Wing method: ' . solve2($sales) . '</p>';
echo '<p>3. Display all sales ordering by biggest total amount</p>';
$orderedSales = $sales;
usort($orderedSales, fn($sale1, $sale2) => $sale2->getTotal() <=> $sale1->getTotal());
echo displaySalesAsTable($orderedSales);


echo '<h2>End Week 4 Demo</h2>';