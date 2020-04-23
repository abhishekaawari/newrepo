<?php

namespace Collection\Product\Controller\Index;
 use Magento\Framework\App\Action\Context;


class View extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{	

		$post = $this->getRequest()->getParam('val2');
		$value = array('val2'=>$post);
		if (array_key_exists('val2', $value)) {
			//echo $post;		
		}else {
			echo "not exists";
		}	
		return $this->_pageFactory->create();
	}
     
}

?>