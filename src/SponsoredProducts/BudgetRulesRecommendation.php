<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class BudgetRulesRecommendation
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRulesRecommendation/SPGetBudgetRulesRecommendation
     * @return mixed
     */
    public function index()
    {
        $path = '/sp/campaigns/budgetRules/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spbudgetrulesrecommendation.v3+json',
            'Accept' => 'application/vnd.spbudgetrulesrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'POST', $headers);
    }
}