<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 5/8/2018
 * Time: 10:26 AM
 */

namespace Amadeus\Client\RequestOptions\Fare\GetFareFamilyDescription;

use Amadeus\Client\LoadParamsFromArray;
/**
 * DiscountDetails
 *
 * @package Amadeus\Client\Struct\Fare\MasterPricer
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class DiscountDetails extends LoadParamsFromArray
{
    /**
     * @param string
     */
    public $fareQualifier;
    /**
     * @param string
     */
    public $rateCategory;
}