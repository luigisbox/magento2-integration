<?php

namespace Luigisbox\Catalog\Block;

class CurrencyCode extends \Magento\Framework\View\Element\Template
{
    public function getCurrencyCode()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $storeManager = $objectManager->get('Magento\Store\Model\StoreManagerInterface');
        $currencyFactory = $objectManager->create('Magento\Directory\Model\CurrencyFactory');
        $currencyCode = $storeManager->getStore()->getCurrentCurrencyCode();
        return $currencyCode;
    }
}
