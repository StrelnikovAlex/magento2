<?php
namespace Shellpea\DataBase\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

class Patch implements
    DataPatchInterface
{
    private $moduleDataSetup;

    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();

        $this->moduleDataSetup->getConnection()->insertMultiple(
            $this->moduleDataSetup->getTable('moderators_table'),
            [
            ['id_column' => '1',
            'name' => 'pip',
            'email' => '1@l.ru',
            'password'  => '11111'],

            ['id_column' => '2',
            'name' => 'suk',
            'email' => 'sfsfffsa@safjj.ru',
            'password'  => '2222'],
            ]
        );

        $this->moduleDataSetup->getConnection()->endSetup();
    }
    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
