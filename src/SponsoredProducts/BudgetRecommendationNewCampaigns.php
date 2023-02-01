<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class BudgetRecommendationNewCampaigns
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Budget%20Recommendation%20New%20Campaigns/getBudgetRecommendation
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function list($profileId, array $body = [])
    {
        $path = '/sp/campaigns/initialBudgetRecommendation';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spinitialbudgetrecommendation.v3.4+json',
            'Accept' => 'application/vnd.spinitialbudgetrecommendation.v3.4+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}