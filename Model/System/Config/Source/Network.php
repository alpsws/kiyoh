<?php
/**
 * My own options
 *
 */
namespace Alps\Kiyoh\Model\System\Config\Source;

class Network
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'kiyoh', 'label'=>__('kiyoh.nl')],
            ['value' => 'international_kiyoh', 'label'=>__('kiyoh.com')],
            ['value' => 'other', 'label'=>__('Other')],
        ];
    }
}
