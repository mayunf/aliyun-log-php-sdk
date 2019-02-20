<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models;

/**
 * The response of the GetLog API from log service.
 *
 * @author log service dev
 */
class UpdateACLResponse extends Response {

    /**
     * UpdateACLResponse constructor
     *
     * @param array $resp
     *            GetLogs HTTP response body
     * @param array $header
     *            GetLogs HTTP response header
     */
    public function __construct($header) {
        parent::__construct ( $header );
    }


}
