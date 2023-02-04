<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class LandingPageAsins extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Landing%20page%20asins/listAsins
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $pageUrl = $param['pageUrl'];
        $path = '/pageAsins';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }
}