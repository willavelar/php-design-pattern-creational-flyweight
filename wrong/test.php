<?php

use DesignPattern\Wrong\Budget;
use DesignPattern\Wrong\Order;

require "vendor/autoload.php";

$orders = [];

for ($i = 0; $i < 10000; $i++) {

    $order = new Order();
    $order->clientName = md5((string) rand(1 , 100000));
    $order->budget = new Budget();
    $order->endDate = new DateTimeImmutable();

    $orders[] = $order;

}

echo memory_get_peak_usage();