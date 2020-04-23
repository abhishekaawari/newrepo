<?php
namespace Product\Collection\Block;
use Magento\Catalog\Model\ProductFactory;
class Collection extends \Magento\Framework\View\Element\Template
{    
    protected $_productCollectionFactory;
   
        
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,       
        array $data = []
    )
    {    
        $this->_productCollectionFactory = $productCollectionFactory;    
        parent::__construct($context, $data);
    }
    
    public function getProductCollection()
    {
        //die('hello');
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        // $collection->setPageSize(10)->setCurPage(1);
        return $collection;
    }
}
?>