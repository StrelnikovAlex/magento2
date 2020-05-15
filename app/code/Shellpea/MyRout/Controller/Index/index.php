<?php

namespace Shellpea\MyRout\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\Controller\Result\RawFactory;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Controller\Result\Redirect;


class Index extends Action
{
  protected $resultRawFactory;

  protected $resultRedirect;

  public function __construct(
    Context $context,
    RawFactory $resultRawFactory,
    Redirect $resultRedirect)
    {
      $this->resultRawFactory = $resultRawFactory;
      $this->resultRedirect = $resultRedirect;
      return parent::__construct($context);
    }

    public function execute()
    {
    //  return $this->resultRawFactory->create()->setContents('НАКОНЕЦ-ТО ЭТО ВОНюЧИЙ HELLO WORLD ЗАРАБОТАЛ!!!!!!!!!!!!!!!!!!11');
      return $this->resultRedirect->setPath('/');
    }
  }
