<?php
namespace Alps\Kiyoh\Model;

class Kiyoh extends \Magento\Framework\Model\AbstractModel
{
    
    const CACHE_TAG = 'alps_kiyoh';

    /**
     * @var string
     */
    protected $_cacheTag = 'alps_kiyoh';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'alps_kiyoh';

    protected function _construct()
    {
        $this->_init('Alps\Kiyoh\Model\ResourceModel\Kiyoh');
    }
}