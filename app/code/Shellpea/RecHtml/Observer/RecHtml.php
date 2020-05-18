<?php

namespace Shellpea\RecHtml\Observer;

use \Magento\Framework\Event\ObserverInterface;

class RecHtml implements ObserverInterface
{
    protected $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
          $this->logger = $logger;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $html = $observer->getEvent()->getResponse()->getBody();
        $this->logger->info($html);
    }
}
