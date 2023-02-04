<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class Stores extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Stores/listAssets
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $path = '/stores/assets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Stores/createAsset
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function create(array $param, array $body)
    {
        $Content_Disposition = $param['Content-Disposition'];
        $Content_Type = $param['Content-Type'];
        $path = '/stores/assets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Disposition' => $Content_Disposition,
            'Content-Type' => $Content_Type,
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}