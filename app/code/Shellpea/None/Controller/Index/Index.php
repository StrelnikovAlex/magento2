<?php
namespace Shellpea\MyRout\Controller\Index;

class Helloworld extends \Magento\Framework\App\Action\Action
{
    protected $_rawResultFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\Raw $rawResultFactory)
    {
			$this->_rawResultFactory = $rawResultFactory;
			return parent::__construct($context);
    }

    public function execute()
    {
			return $this->_rawResultFactory->setContents('Hello World');
    }
}
