<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class ThemeBasedBidRecommendation
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ThemeBasedBidRecommendation/GetThemeBasedBidRecommendationForAdGroup_v1
     * @return mixed
     */
    public function index()
    {
        $path = '/sp/targets/bid/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spthemebasedbidrecommendation.v3+json',
            'Accept' => 'application/vnd.spthemebasedbidrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'POST', $headers);
    }
}