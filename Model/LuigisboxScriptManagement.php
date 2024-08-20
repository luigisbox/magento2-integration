<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Luigisbox\Integration\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class LuigisboxScriptManagement implements \Luigisbox\Integration\Api\LuigisboxScriptManagementInterface
{
    protected $request;

    /**
     * @var \Magento\Framework\App\Config\Storage\WriterInterface
     */
    private $_configWriter;

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var \Magento\Framework\App\Cache\Manager
     */
    private $cacheManager;

    public function __construct(
        \Magento\Framework\Webapi\Rest\Request $request,
        ScopeConfigInterface $scopeConfig,
        \Magento\Framework\App\Config\Storage\WriterInterface $configWriter,
        \Magento\Framework\App\Cache\Manager $cacheManager
    ) {
        $this->_configWriter = $configWriter;
        $this->scopeConfig = $scopeConfig;
        $this->request = $request;
        $this->cacheManager = $cacheManager;
    }

    /**
     * {@inheritdoc}
     */
    public function postLuigisboxScript()
    {
        $body = $this->request->getBodyParams();
        $scopeId = $body["scope_id"];
        $scriptTag = $body["script_tag"];

        $html_header = $this->scopeConfig->getValue("design/head/includes", ScopeInterface::SCOPE_STORES, $scopeId);
        if (!str_contains($html_header, $scriptTag)) {
            $updatedValue= $html_header . $scriptTag;
            $this->_configWriter->save("design/head/includes", $updatedValue, ScopeInterface::SCOPE_STORES, $scopeId);
            $this->cacheManager->flush($this->cacheManager->getAvailableTypes());
        }

        return "OK";
    }
}
