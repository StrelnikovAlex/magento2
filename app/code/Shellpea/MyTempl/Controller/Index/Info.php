<?php
namespace Shellpea\MyTempl\Controller\Index;

class Info extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    protected $resultRaw;

    protected $layoutFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Controller\Result\Raw $resultRaw,
        \Magento\Framework\View\LayoutFactory $layoutFactory
    ) {
        $this->resultRaw = $resultRaw;
        $this->resultPageFactory = $resultPageFactory;
        $this->layoutFactory = $layoutFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->layoutFactory->create()
            ->createBlock('Magento\Framework\View\Element\Template')
            ->setTemplate('Shellpea_MyTempl::info.phtml')
            ->toHtml();
        return $this->resultRaw->setContents($result);
    }
}
