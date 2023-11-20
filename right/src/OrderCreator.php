<?php

namespace DesignPattern\Right;

class OrderCreator
{
    private array $templates = [];

    public function createOrder(string $clientName, \DateTimeInterface $endDate, Budget $budget) : Order
    {
        $orderTemplate = $this->generateOrderTemplate($clientName, $endDate);
        $order = new Order();
        $order->orderTemplate = $orderTemplate;
        $order->budget = $budget;

        return $order;
    }

    private function generateOrderTemplate(string $clientName, \DateTimeInterface $endDate) : OrderTemplate
    {
        $hash = md5($clientName . $endDate->getTimestamp());

        if (!array_key_exists($hash, $this->templates)) {
            $template = new OrderTemplate();
            $template->clientName = $clientName;
            $template->endDate = $endDate;

            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}