<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class BidRecommendations extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Bid%20recommendations/getBidsRecommendations
     * @param $body
     * @return mixed
     */
    public function index($body)
    {
        $path = '/sb/recommendations/bids';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbbidsrecommendation.v3.1+json',
            'Accept' => 'application/vnd.sbbidsrecommendation.v3.1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}