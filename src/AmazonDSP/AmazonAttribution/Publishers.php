<?php

namespace AmazonAdsApi\AmazonDSP\AmazonAttribution;

use AmazonAdsApi\BaseModel;

class Publishers extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#/Publishers/getPublishers
     * @return mixed
     */
    public function index()
    {
        $path = '/attribution/publishers';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}