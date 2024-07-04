# LuigisBox Magento 2 integration module

This is a module for Magento 2 shops to integrate LuigisBox services. Module provides these features:
- includes LBX script on website to run LBX services
- adds Product attribute `custom_attributes_luigi`
    - this attribute is the same as Magento's `custom_attributesV2`, but it is able to deal with `null` values. Magento's implementation returns empty array, if any of the attributes is set to `null`