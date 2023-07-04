<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class KeywordTargets extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keyword%20Targets/getRankedKeywordRecommendation
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/sp/targets/keywords/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spkeywordsrecommendation.v3+json',
            'Accept' => 'application/vnd.spkeywordsrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}
