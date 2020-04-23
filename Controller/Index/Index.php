<?php
namespace Product\Collection\Controller\Index;
 use Magento\Framework\App\Action\Context;


class Index extends \Magento\Framework\App\Action\Action
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

		// $post = $this->getRequest()->getParams('val2');
		// print_r($post);
		// if (array_key_exists('val2', $post)) {
		//     echo $post['val2'];
		// }		//die('hi');

		// print_r($this->request->getParams());

		return $this->_pageFactory->create();
	}
       
}       
?>