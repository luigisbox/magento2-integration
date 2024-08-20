![image](https://www.luigisbox.com/app/uploads/2022/06/logo.svg)


# Luigi's Box Magento 2 Extension


## Introduction

Official Luigi's Box integration for Magento 2 framework. This extension provides a way of implementing Luigi's Box services on your Magento 2 website.

Luigi's Box services include:
  - improved search & autocomplete
  - improved analytics
  - improved recommender
  - and much more. See at [Luigi's Box](https://www.luigisbox.com/)

Extension imports a special Luigi's Box script into to the HTML header of the website, which provides a way to utilize Luigi's Box services.

Extension also provides custom REST endpoints and GraphQL attributes, in order to successfully synchronize Magento 2 catalog with Luigi's Box.

## Installation

1. **Add the Luigi's Box extension to your Magento 2 shop:** (this can be done manually or by using `composer`)
    - Manually:
        - Copy this GitHub repository to `app/code/Luigisbox/Catalog` within your Magento folder
    - Using `composer`:
        - Run `composer require luigisbox/catalog` in your Magento 2 root directory

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
