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

    public function list($profileId)
    {
        $path = '/sp/targets/keywords/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spkeywordsrecommendation.v3+json',
            'Accept' => 'application/vnd.spkeywordsrecommendation.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'POST', $headers);
    }
}