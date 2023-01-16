<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class KeywordRecommendations
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ThemeBasedBidRecommendation/GetThemeBasedBidRecommendationForAdGroup_v1
     * @param $profileId
     * @return mixed
     */
    public function  list($profileId)
    {
        $path = '/sp/targets/bid/recommendations';
        return $this->instance->requestWithProfileId($profileId, $path, [], 'POST');
    }
}