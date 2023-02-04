<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class TargetingRecommendations extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting%20Recommendations/getTargetRecommendations
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/sd/targets/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sdtargetingrecommendations.v3.2+json',
            'Accept' => 'application/vnd.sdtargetingrecommendations.v3.2+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}