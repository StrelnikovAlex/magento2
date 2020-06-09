<?php

namespace Shellpea\GetProduct\Block;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\View\Element\Template\Context;

class Product extends \Magento\Framework\View\Element\Template
{

    protected $sortOrder;

    private $productRepository;

    private $searchCriteriaBuilder;

    protected $filterBuilder;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        SortOrder $sortOrder,
        FilterBuilder $filterBuilder,
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->filterBuilder = $filterBuilder;
        $this->sortOrder = $sortOrder;
    }
    public function getProducts()
    {
          $searchCriteria = $this->searchCriteriaBuilder
              ->addFilter('price', '0', 'gteq')
              ->addFilter('entity_id', 3, 'lteq')
              ->setPageSize(6)
              ->addSortOrder($this->sortOrder->setDirection('DESC')->setField('weight'))
              ->create();

          $products = $this->productRepository->getList($searchCriteria);

          return $products->getItems();
    }
}
