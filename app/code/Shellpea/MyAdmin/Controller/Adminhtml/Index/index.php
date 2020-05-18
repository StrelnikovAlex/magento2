<?php

namespace Shellpea\MyAdmin\Controller\Adminhtml\Index;

use Magento\Framework\Controller\Result\Raw;
use \Magento\Backend\App\Action\Context;

class Index extends \Magento\Backend\App\AbstractAction
{
    protected $_publicActions = ['index'];
    protected $resultRaw;

    public function __construct(
      Context $context,
      Raw $resultRaw)
      {
        $this->resultRaw = $resultRaw;
        return parent::__construct($context);
      }

    protected function _isAllowed()
    {
        $param = $this->_request->getParam('secret');
        if (!($param == 1)) {
            return false;
        }
        return parent::_isAllowed();
    }

    public function execute()
    {
      return $this->resultRaw->setContents('!!!!!!!!!!!!!!!!!!');
    }

}
