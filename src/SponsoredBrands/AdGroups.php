<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class AdGroups extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Ad%20groups/listAdGroups
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $path = '/sb/adGroups';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Ad%20groups/getAdGroup
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $adGroupId = $param['adGroupId'];
        $path = '/sb/adGroups/{adGroupId}';
        $path = str_replace('{adGroupId}', $adGroupId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}