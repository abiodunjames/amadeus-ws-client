<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 5/8/2018
 * Time: 11:24 AM
 */

namespace Amadeus\Client\RequestOptions;


use Amadeus\Client\RequestOptions\Fare\GetFareFamilyDescription\StandaloneDescriptionRequest;

class GetFareFamilyDescriptionOptions extends Base
{

    /**
     * @var \DateTime
     */
    public $bookingDate;

    /**
     * @var StandaloneDescriptionRequest[]
     */
    public $standaloneRequest= [];

}