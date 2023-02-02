<?php

namespace AmazonAdsApi\Eligibility;

use AmazonAdsApi\BaseModel;

class ProductEligibility
{
    /** https://advertising.amazon.com/API/docs/en-us/eligibility-prod-3p/#/Product%20Eligibility/productEligibility
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/eligibility/product/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}