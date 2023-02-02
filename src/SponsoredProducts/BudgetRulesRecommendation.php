<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class BudgetRulesRecommendation extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRulesRecommendation/SPGetBudgetRulesRecommendation
     * @return mixed
     */
    public function index(array $param)
    {
        $campaignId = $param['campaignId'];
        $path = '/sp/campaigns/budgetRules/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spbudgetrulesrecommendation.v3+json',
            'Accept' => 'application/vnd.spbudgetrulesrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, $param, [], 'POST', $headers);
    }
}