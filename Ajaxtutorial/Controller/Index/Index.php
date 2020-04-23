<?php

namespace Techone\Ajaxtutorial\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;


class Index extends Action
{

    /**
    * @var PageFactory
    */
    protected $resultPageFactory;


    /**
    * Result constructor.
    * @param Context $context
    * @param PageFactory $pageFactory
    */
    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->resultPageFactory = $pageFactory;
        parent::__construct($context);
    }


    /**
    * The controller action
    *
    * @return \Magento\Framework\View\Result\Page
    */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}