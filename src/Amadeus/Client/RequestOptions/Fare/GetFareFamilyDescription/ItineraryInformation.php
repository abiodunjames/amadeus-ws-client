<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 5/8/2018
 * Time: 10:29 AM
 */

namespace Amadeus\Client\RequestOptions\Fare\GetFareFamilyDescription;

use Amadeus\Client\LoadParamsFromArray;

class ItineraryInformation extends LoadParamsFromArray
{
    /** Flight origin IATA Code
     * @param string
     */
    public $origin;

    /**
     * Flight destination
     * @param string
     */
    public $destination;
}