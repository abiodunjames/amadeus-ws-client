<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 5/8/2018
 * Time: 10:50 AM
 */

namespace Amadeus\Client\Struct\Fare\GetFareFamilyDescription;


class StandaloneDescriptionRequest
{
    /**
     * @var DiscountDetails
     */
    public $fareInformation;

    /**
     * @var ItineraryInformation
     */
    public $itineraryInformation;

    /**
     * @var CompanyIdentification
     */
    public $carrierInformation;

    /**
     * @var \DateTime
     */
    public $flightDateInformation;

}