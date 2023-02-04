<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class BidRecommendations extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Bid%20Recommendations/getTargetBidRecommendations
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/sd/targets/bid/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sdtargetingrecommendations.v3.2+json',
            'Accept' => 'application/vnd.sdtargetingrecommendations.v3.2+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}