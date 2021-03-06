<?php

namespace Shellpea\DataBase\Setup\Patch\Data;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ResourceModel\Eav\Attribute;

class MultiSelect implements DataPatchInterface
{
  /** @var ModuleDataSetupInterface */
    private $moduleDataSetup;

  /** @var EavSetupFactory */
    private $eavSetupFactory;

  /**
   * @param ModuleDataSetupInterface $moduleDataSetup
   * @param EavSetupFactory $eavSetupFactory
   */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

  /**
   * {@inheritdoc}
   */
    public function apply()
    {
      /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);

        $eavSetup->addAttribute(
            Product::ENTITY,
            'multi_attribute',
            [
            'type' => 'text',
            'label' => 'Test Attribute',
            'input' => 'multiselect',
            'global' => Attribute::SCOPE_GLOBAL,
            'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
            'visible' => true,
            'required' => false,
            'visible_on_front' => true,
            'option' => ['values' => [
            'Option 1',
            'Option 2',
            'Option 3',
            ],
            ],
            ]
        );
    }

/**
 * {@inheritdoc}
 */
    public static function getDependencies()
    {
        return [];
    }

/**
 * {@inheritdoc}
 */
    public function getAliases()
    {
        return [];
    }
}
