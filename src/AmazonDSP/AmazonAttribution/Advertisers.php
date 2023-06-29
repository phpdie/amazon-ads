<?php

namespace AmazonAdsApi\AmazonDSP\AmazonAttribution;

use AmazonAdsApi\BaseModel;

class Advertisers extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#/Advertisers/getAdvertisersByProfile
     * @return mixed
     */
    public function index()
    {
        $path = '/attribution/advertisers';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}