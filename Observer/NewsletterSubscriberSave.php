<?php
namespace Binstellar\Newsletters\Observer;

use \Magento\Framework\Event\Observer;
use \Magento\Framework\Event\ObserverInterface;

class newsletterSubscriberSave implements ObserverInterface
{
    protected $_request;

    public function __construct(
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->_request = $request;
    }

    public function execute(Observer $observer)
    { 
        $subscriber = $observer->getEvent()->getSubscriber();

        $firstname = $this->_request->getPost('firstname');
        $lastname = $this->_request->getPost('lastname');
        $dob = $this->_request->getPost('dob');
        $subscriber->setCFirstname($firstname);
        $subscriber->setCLastname($lastname);
        $subscriber->setCDob($dob);

        return $this;
    }
}