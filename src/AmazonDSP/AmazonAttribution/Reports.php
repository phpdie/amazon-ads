<?php

namespace AmazonAdsApi\AmazonDSP\AmazonAttribution;

use AmazonAdsApi\BaseModel;

class Reports extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#/Reports/getAttributionTagsByCampaign
     * @param array $body
     * @return mixed
     */
    public function report(array $body)
    {
        $path = '/attribution/report';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}