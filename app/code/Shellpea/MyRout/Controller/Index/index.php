<?php

namespace Shellpea\MyRout\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\Controller\Result\RawFactory;
use \Magento\Framework\App\Action\Context;


class Index extends Action
{
  protected $resultRawFactory;

  public function __construct(
    Context $context,
    RawFactory $resultRawFactory
    )
    {
      $this->resultRawFactory = $resultRawFactory;
      return parent::__construct($context);
    }

    public function execute()
    {
      return $this->resultRawFactory->create()->setContents('НАКОНЕЦ-ТО ЭТО ВОНюЧИЙ HELLO WORLD ЗАРАБОТАЛ!!!!!!!!!!!!!!!!!!11');

    }
  }
