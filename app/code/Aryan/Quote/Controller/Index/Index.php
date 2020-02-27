<?php
namespace Aryan\Quote\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;

    protected $helperData;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Aryan\Quote\Helper\Data $helperData
    ){
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->helperData = $helperData;
    }

    public function execute()
    {
        echo $this->getQuoteConfig('quote_text');
        exit();
        //return $this->resultPageFactory->create();
    }
}
