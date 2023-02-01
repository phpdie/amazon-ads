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
     * @param $profileId
     * @return mixed
     */
    public function list($profileId)
    {
        $path = '/sp/campaigns/budgetRules/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spbudgetrulesrecommendation.v3+json',
            'Accept' => 'application/vnd.spbudgetrulesrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'POST', $headers);
    }
}