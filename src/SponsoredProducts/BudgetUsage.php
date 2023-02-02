<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class BudgetUsage extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Budget%20Usage/spCampaignsBudgetUsage
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/sp/campaigns/budget/usage';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spcampaignbudgetusage.v1+json',
            'Accept' => 'application/vnd.spcampaignbudgetusage.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}