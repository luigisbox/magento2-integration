<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Luigisbox\Catalog\Api;

interface ParentProductsInterface
{
    /**
     *  Returns parent products skus for given child ids
     * 
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return string
     */
    public function getParentSkusByChildIds();
}
