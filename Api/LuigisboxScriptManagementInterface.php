<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Luigisbox\Integration\Api;

interface LuigisboxScriptManagementInterface
{
    /**
     * Imports script into store view HTML header, if it was not already there.
     * Afterwards it flushes cache to immediately display script on store page.
     * 
     * @return string
     */
    public function postLuigisboxScript();
}
