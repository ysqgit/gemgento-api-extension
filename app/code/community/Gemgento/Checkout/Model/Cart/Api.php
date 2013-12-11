<?php

class Gemgento_Checkout_Model_Cart_Api extends Mage_Checkout_Model_Cart_Api {

    /**
     * Create new quote for shopping cart
     *
     * @param int|string $store
     * @return int
     */
    public function create($store = null, $gemgentoId = null) {
        $storeId = $this->_getStoreId($store);

        try {
            /* @var $quote Mage_Sales_Model_Quote */
            $quote = Mage::getModel('sales/quote');
            $quote->setStoreId($storeId)
                    ->setIsActive(true)
                    ->setIsMultiShipping(false)
                    ->setGemgentoId($gemgentoId)
                    ->save();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('create_quote_fault', $e->getMessage());
        }
        return (int) $quote->getId();
    }

}