<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class ThemeBasedBidRecommendation extends BaseModel
{
    /**
     * https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ThemeBasedBidRecommendation/GetThemeBasedBidRecommendationForAdGroup_v1
     * @param array $body
     * @return void
     */
    public function index(array $body)
    {
        $path = '/sp/targets/bid/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spthemebasedbidrecommendation.v3+json',
            'Accept' => 'application/vnd.spthemebasedbidrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}
