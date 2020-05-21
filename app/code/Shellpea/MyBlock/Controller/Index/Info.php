<?php
namespace Shellpea\MyBlock\Controller\Index;

class Info extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $html = $this->resultPageFactory->create()
                                         ->getLayout()
                                         //->createBlock('Shellpea\MyBlock\Block\Info')
                                         ->createBlock(Magento\Framework\View\Element::Text)->setText('Done task two')
                                         ->toHtml();
        $this->getResponse()->setBody($html);
    }
}
