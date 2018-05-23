<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 5/8/2018
 * Time: 10:55 AM
 */

namespace Amadeus\Client\Struct\Fare;


use Amadeus\Client\RequestOptions\GetFareFamilyDescriptionOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Fare\GetFareFamilyDescription\StandaloneDescriptionRequest;

class GetFareFamilyDescription extends BaseWsMessage
{
    /**
     * @var \DateTime
     */
    public $bookingDateInformation;

    /**
     * @var StandaloneDescriptionRequest[]
     */
    public $standaloneDescriptionRequest;


    /**
     * GetFareFamilyDescription constructor.
     * @var GetFareFamilyDescriptionOptions|null $options
     */
    public function __construct($options)
    {
        if ($options instanceof GetFareFamilyDescriptionOptions) {
            $this->loadOptions($options);
        }
    }

    /**
     * @param $params
     */
    public function loadOptions($params)
    {
        if ($params->standaloneRequest) {
            $this->standaloneDescriptionRequest = $params->standaloneRequest;
        }
        if ($params->bookingDate) {
            $this->bookingDateInformation = $params->bookingDate;
        }
    }
}