<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class Brands extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Brands/getBrands
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/brands';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }
}