<?php

namespace Techone\Ajaxtutorial\Controller\Result;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class Result extends \Magento\Framework\App\Action\Action
{

     /**
     * @var Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    protected $resultJsonFactory; 

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        JsonFactory $resultJsonFactory
        )
    {

        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory; 
        return parent::__construct($context);
    }


    public function execute()
    {
        $numone = $this->getRequest()->getParam('numone');
        $numtwo = $this->getRequest()->getParam('numtwo');
        $result = $this->resultJsonFactory->create();
        $resultPage = $this->resultPageFactory->create();

        $block = $resultPage->getLayout()
                ->createBlock('Techone\Ajaxtutorial\Block\Index')
                ->setTemplate('Techone_Ajaxtutorial::result.phtml')
                ->setData('numone',$numone)
                ->setData('numtwo',$numtwo)
                ->toHtml();
        

        $result->setData(['output' => $block]);
        return $result;
    } 
}