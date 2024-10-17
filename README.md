![image](https://www.luigisbox.com/app/uploads/2022/06/logo.svg)


# Luigi's Box Magento 2 Extension


## Introduction

Official Luigi's Box integration for Adobe Commerce (Magento) platform. [Luigi's Box](https://www.luigisbox.com) is an Award Winning Product Discovery Solution for eCommerce, providing Search, Product Listing, Product Recommendations and related Analytics.

This repository holds composer package of a Magento2 extension, providing all the prerequisites for integration between M2 store & Luigi's Box services. 

Upon its installation and activation, this extension: 
- Creates an account/project/site at Luigi's Box.
- Includes a special Luigi's Box script into to the HTML header of the store. The whole (frontend) integration of Luigi's Box services is delivered through the script.
- Ensures all the product data is synchronized to Luigi's Box Catalog Services. To achieve this, it creates custom REST endpoints and GraphQL attributes used by the synchronization process.

This extension requires Magento version 2.3.1 or higher.

Installation process relies on your Magento server being publicly accessible, so installation on localhost will not succeed.

## Installation

1. **Add the Luigi's Box extension to your Magento 2 shop:** (this can be done manually or by using `composer`)
    - Manually:
        - Copy this GitHub repository to `app/code/Luigisbox/Integration` within your Magento folder
    - Using `composer`:
        - Run `composer require luigisbox/magento2-integration` in your Magento 2 root directory

2. **Run the following commands in your Magento 2 root directory:**
    ```bash
    php bin/magento setup:upgrade
    php bin/magento setup:di:compile
    php bin/magento setup:static-content:deploy -f
    php bin/magento cache:flush
    ```

3. **Activate Luigi's Box services:**
    1. Go to `Magento 2 Administration -> System -> Extensions -> Integrations`
        - you should see `LuigisboxIntegration`
    2. Click on `activate` button next to `LuigisboxIntegration`
        - installation process starts and setup form pops up
        - your catalog is being synchronized with our services in the background
    3. Fill in the setup form and you will be redirected to Luigi's Box Web Application
        - here you can set up our services
