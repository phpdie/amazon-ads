<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class ConsolidatedRecommendations
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Consolidated%20Recommendations/getCampaignRecommendations
     * @return mixed
     */
    public function list()
    {
        $path = '/sp/campaign/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Accept' => 'application/vnd.spgetcampaignrecommendationsresponse.v1+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}