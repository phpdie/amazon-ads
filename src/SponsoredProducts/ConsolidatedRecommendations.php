<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class ConsolidatedRecommendations extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Consolidated%20Recommendations/getCampaignRecommendations
     * @return mixed
     */
    public function index()
    {
        $path = '/sp/campaign/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Accept' => 'application/vnd.spgetcampaignrecommendationsresponse.v1+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}