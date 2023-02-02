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
     * @param array $body
     * @return mixed
     */
    public function index(array $body = [])
    {
        $path = '/sp/campaigns/initialBudgetRecommendation';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spinitialbudgetrecommendation.v3.4+json',
            'Accept' => 'application/vnd.spinitialbudgetrecommendation.v3.4+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}