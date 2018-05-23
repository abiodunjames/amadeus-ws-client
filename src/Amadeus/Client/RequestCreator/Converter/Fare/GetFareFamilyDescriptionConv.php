<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 5/8/2018
 * Time: 10:58 AM
 */

namespace Amadeus\Client\RequestCreator\Converter\Fare;


use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\GetFareFamilyDescriptionOptions;
use Amadeus\Client\Struct\Fare\GetFareFamilyDescription;

class GetFareFamilyDescriptionConv extends BaseConverter
{

    /**
     * @param GetFareFamilyDescriptionOptions $requestOptions
     * @param int|string $version
     * @return GetFareFamilyDescription
     */
    public function convert($requestOptions, $version)
    {
        return new GetFareFamilyDescription($requestOptions);
    }
}