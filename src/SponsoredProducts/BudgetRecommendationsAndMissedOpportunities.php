<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class BudgetRecommendationsAndMissedOpportunities
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Budget%20recommendations%20and%20missed%20opportunities/getBudgetRecommendations
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function list($profileId, array $body)
    {
        $path = '/sp/campaigns/budgetRecommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.budgetrecommendation.v3+json',
            'Accept' => 'application/vnd.budgetrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}