<?php 
namespace Alps\Kiyoh\Controller\Adminhtml\System\Config;

class Button extends \Magento\Backend\App\Action
{
    protected $kiyohFactory; 
    protected $helperData;
    protected $resultJsonFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,        
        \Alps\Kiyoh\Helper\Data $helperData,        
        array $data = []
    ) {
        $this->helperData = $helperData;        
        parent::__construct($context);
    }

    public function execute()
    {   
        $this->helperData->fetchReview();
    }
}