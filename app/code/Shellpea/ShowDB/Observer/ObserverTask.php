<?php

namespace Shellpea\ShowDB\Observer;

use \Magento\Framework\Event\ObserverInterface;

class ObserverTask implements ObserverInterface
{
    protected $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $attributes = [];
        $product = $observer->getEvent()->getProduct();
        foreach ($product->getAttributes() as $attribute) {
            $attributes[] = $attribute->getName();
            foreach ($attributes as $attribute) {
                $attributes[] = $attribute->getName();
            }
            foreach ($attributes as $$attribute) {
                $productName = $product['name'];
                $old = $product->getOrigData($attribute);
                $new = $product->getData($attribute);

                if (!is_array($old) && !is_array($new) && $old !== $new) {
                    $event = "Change $attribute $old => $new in $productName";
                    $this->logger->info($event);
                }
            }
        }
    }
}
