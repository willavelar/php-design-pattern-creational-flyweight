<?php

namespace DesignPattern\Wrong;

class Order
{
    public string $clientName;
    public \DateTimeInterface $endDate;
    public Budget $budget;
}