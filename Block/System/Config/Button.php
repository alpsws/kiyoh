<?php
namespace Alps\Kiyoh\Block\System\Config;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Button extends \Magento\Config\Block\System\Config\Form\Field
{
    protected $_template = 'Alps_Kiyoh::system/config/button.phtml';
 
     public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
 
     public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }
       protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return $this->_toHtml();
    }
    public function getAjaxUrl()
    {
        return $this->getUrl('kiyoh/system_config/button');
    }
    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock(
            'Magento\Backend\Block\Widget\Button'
        )->setData(
            [
                'id' => 'btnid',
                'label' => __('Fetch Review'),
            ]
        );
 
        return $button->toHtml();
    }
}