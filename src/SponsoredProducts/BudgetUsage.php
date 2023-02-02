<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class BudgetUsage
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Budget%20Usage/spCampaignsBudgetUsage
     * @param array $body
     * @return mixed
     */
    public function list(array $body)
    {
        $path = '/sp/campaigns/budget/usage';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spcampaignbudgetusage.v1+json',
            'Accept' => 'application/vnd.spcampaignbudgetusage.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}