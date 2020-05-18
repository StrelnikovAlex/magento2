<?php

namespace Shellpea\RecRout;

use Psr\Log\LoggerInterface;
use Magento\Framework\App\FrontController;
use Magento\Framework\App\RouterListInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\ObjectManager;

class MyFrontController extends FrontController
{
    protected $_routerList;

    private $logger;

    public function __construct(
        RouterListInterface $routerList,
        ResponseInterface $response,
        ?LoggerInterface $logger = null
    ) {
        $this->logger = $logger
        ?? ObjectManager::getInstance()->get(LoggerInterface::class);
      
        parent::__construct(
            $routerList,
            $response,
            $logger
        );
    }

    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router) {
            $this->logger->info(get_class($router));
        }
        return parent::dispatch($request);
    }
}
