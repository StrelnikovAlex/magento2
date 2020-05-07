<?php

namespace Shellpea\ForObserv\Observer;

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
		  $myEventData = $observer->getRequest();
		  $url = $myEventData->getPathInfo();
      $this->logger->info($url);
    }
}
