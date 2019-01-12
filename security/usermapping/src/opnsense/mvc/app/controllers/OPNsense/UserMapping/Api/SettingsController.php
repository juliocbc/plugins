<?php
/*
 *    Copyright (C) 2019 Fabian Franz
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 */

namespace OPNsense\UserMapping\Api;


use OPNsense\Base\ApiMutableModelControllerBase;

class SettingsController extends ApiMutableModelControllerBase
{
    private const USER_MAPPING = 'user_mapping';
    static protected $internalModelClass = '\OPNsense\UserMapping\UserMapping';
    static protected $internalModelName = 'usermapping';

    // User Mapping
    public function search_user_mappingAction()
    {
        return $this->searchBase(self::USER_MAPPING, array('description', 'external_alias', 'type', 'object_name'));
    }

    public function get_user_mappingAction($uuid = null)
    {
        $this->sessionClose();
        return $this->getBase(self::USER_MAPPING, self::USER_MAPPING, $uuid);
    }

    public function add_user_mappingAction()
    {
        return $this->addBase(self::USER_MAPPING, self::USER_MAPPING);
    }

    public function del_user_mappingAction($uuid)
    {
        return $this->delBase(self::USER_MAPPING, $uuid);
    }

    public function set_user_mappingAction($uuid)
    {
        return $this->setBase(self::USER_MAPPING, self::USER_MAPPING, $uuid);
    }
}