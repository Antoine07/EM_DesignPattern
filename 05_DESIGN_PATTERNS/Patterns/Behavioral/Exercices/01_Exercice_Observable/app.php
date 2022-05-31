<?php

require __DIR__ . '/vendor/autoload.php';

use Cart\{Cart, Product}; // Observable 
use Cart\Observers\{LogFile, LogSum}; // Observers

$cart = new Cart([]);

$observerSum = new LogSum();
$observerFile = new LogFile('./tests/_data/log.txt');

$cart->attach($observerSum);
$cart->attach($observerFile);

$apple = new Product(name: 'apple', price: 1.2);
$raspberry = new Product(name: 'raspberry', price: 0.2);

$cart->buy($apple, 10);
$cart->buy($raspberry, 10);

print_r($observerSum->getStorage());
echo PHP_EOL;
print_r($observerFile->getStorage());
echo PHP_EOL;


print_r($cart->total());

echo PHP_EOL;
