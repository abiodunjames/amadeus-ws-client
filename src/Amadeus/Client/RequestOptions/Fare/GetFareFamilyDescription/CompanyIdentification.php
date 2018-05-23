<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 5/8/2018
 * Time: 10:32 AM
 */

namespace Amadeus\Client\RequestOptions\Fare\GetFareFamilyDescription;


use Amadeus\Client\LoadParamsFromArray;

class CompanyIdentification extends LoadParamsFromArray
{
    /**
     * @param string
     */
    public $otherCompany;
}