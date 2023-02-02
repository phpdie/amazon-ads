<?php

namespace AmazonAdsApi\CommonResources\Localization;

use AmazonAdsApi\BaseModel;

class ProductLocalization extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/localization/#/Product%20Localization/getLocalizedProducts
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/products/localize';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.productlocalization.v1+json',
            'Accept' => 'application/vnd.productlocalization.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}