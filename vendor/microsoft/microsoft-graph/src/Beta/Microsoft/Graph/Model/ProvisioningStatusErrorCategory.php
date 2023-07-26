<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningStatusErrorCategory File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ProvisioningStatusErrorCategory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisioningStatusErrorCategory extends Enum
{
    /**
    * The Enum ProvisioningStatusErrorCategory
    */
    const FAILURE = "failure";
    const NON_SERVICE_FAILURE = "nonServiceFailure";
    const SUCCESS = "success";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
