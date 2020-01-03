<?php
namespace Alps\Kiyoh\Cron;

class Kiyoh 
{    
    protected $_gridFactory; 
    protected $helperData;

    public function __construct(
        \Alps\Kiyoh\Model\KiyohFactory $gridFactory,
        \Alps\Kiyoh\Helper\Data $helperData,
        array $data = []
    ){
        $this->helperData = $helperData;
        $this->_gridFactory = $gridFactory;
    }

    public function execute(\Magento\Cron\Model\Schedule $schedule)
    {

        $myfile = fopen("sssssssss.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);
       $this->helperData->fetchReview();
    }
}