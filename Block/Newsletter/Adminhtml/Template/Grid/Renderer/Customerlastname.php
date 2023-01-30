<?php
/**
 * Created by PhpStorm.
 * User: jinalshah
 * Date: 17/3/21
 * Time: 1:28 PM
 */
namespace Binstellar\Newsletters\Block\Newsletter\Adminhtml\Template\Grid\Renderer;
use Magento\Framework\DataObject;
class Customerlastname extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    public function render(\Magento\Framework\DataObject $row)
    {
        if($row->getData('type')==1){
            return ($row->getData('c_lastname')!=''?$row->getData('c_lastname'):'----');
        }else{
            return ($row->getData('lastname')!=''?$row->getData('lastname'):'----');
        }
    }
}