LuigisBox Magento 2 integration module
==================

This is a module for Magento 2 shops to integrate LuigisBox services.
- includes LBX script on website to run LBX services
- provides custom REST endpoints and GRAPHQL attributes for synchronization of catalog with LBX

Manual installation
------------

- Copy `Luigisbox` directory to `your-magento2-root-directory/app/code`

Please run **all** of the following commands in your Magento 2 root directory:
- ```php bin/magento setup:upgrade```
- ```php bin/magento setup:di:compile```
- ```php bin/magento setup:static-content:deploy```
- ```php bin/magento cache:flush```

Activating services:
- go to `Magento 2 Administration -> System -> Extensions -> Integrations`
  - you should see `LuigisboxIntegration`
- click on `activate` button next to `LuigisboxIntegration`
  - installation process starts and setup form pops up
  - your catalog is being synchronized with our services in the background
- fill in the setup form and you will be redirected to Luigisbox Web Application
  - here you can set up our services