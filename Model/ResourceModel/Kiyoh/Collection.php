<?php
namespace Alps\Kiyoh\Model\ResourceModel\Kiyoh;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Alps\Kiyoh\Model\Kiyoh',
            'Alps\Kiyoh\Model\ResourceModel\Kiyoh'
        );
    }
}
