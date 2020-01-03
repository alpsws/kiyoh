<?php
namespace Alps\Kiyoh\Block;

class Kiyoh extends \Magento\Framework\View\Element\Template
{      
    protected $_helperData;

    public function __construct
    (   \Magento\Framework\View\Element\Template\Context $context,       
        \Alps\Kiyoh\Helper\Data $helperData,
        array $data = []
    )
    {        
        $this->_helperData = $helperData;
        parent::__construct($context, $data);
    }    

    public function getCustomerReview(){
       return $this->_helperData->getCustomerReviewData();        
    }

    public function getTitle(){
        return $this->_helperData->kiyohTitle() ? $this->_helperData->kiyohTitle() : __("Kiyoh Review") ;
    }

    public function getMaxrating(){
        return 10;
    }
}
