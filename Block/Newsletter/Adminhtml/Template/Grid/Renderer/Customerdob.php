<?php
/**
 * Created by PhpStorm.
 * User: jinalshah
 * Date: 17/3/21
 * Time: 1:28 PM
 */
namespace Binstellar\Newsletters\Block\Newsletter\Adminhtml\Template\Grid\Renderer;
use Magento\Framework\DataObject;
class Customerdob extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    public function render(\Magento\Framework\DataObject $row)
    {
        if($row->getData('type')==1){
            return ($row->getData('c_dob')!=''?$row->getData('c_dob'):'----');
        }else{
            return ($row->getData('c_dob')!=''?$row->getData('c_dob'):'----');
        }
    }
}