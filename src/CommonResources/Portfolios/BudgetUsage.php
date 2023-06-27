<?php

namespace AmazonAdsApi\CommonResources\Portfolios;

use AmazonAdsApi\BaseModel;

class BudgetUsage extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/reference/portfolios#/Budget%20Usage/portfolioBudgetUsage
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/portfolios/budget/usage';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.portfoliobudgetusage.v1+json',
            'Accept' => 'application/vnd.portfoliobudgetusage.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}