<?php

use DesignPattern\Right\Budget;
use DesignPattern\Right\Order;
use DesignPattern\Right\OrderCreator;

require "vendor/autoload.php";

$orders = [];

$orderCreator = new OrderCreator();
$clientName = md5((string) rand(1 , 100000));
$date = new DateTimeImmutable();

for ($i = 0; $i < 10000; $i++) {

    $budget = new Budget();
    $order = $orderCreator->createOrder($clientName, $date, $budget);
    $orders[] = $order;

}

echo memory_get_peak_usage();