<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class KeywordTargets
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keyword%20Targets/getRankedKeywordRecommendation
     * @return mixed
     */
    public function list()
    {
        $path = '/sp/targets/keywords/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spkeywordsrecommendation.v3+json',
            'Accept' => 'application/vnd.spkeywordsrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'POST', $headers);
    }
}