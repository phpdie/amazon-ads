<?php

namespace AmazonAdsApi\CommonResources\Localization;

use AmazonAdsApi\BaseModel;

class KeywordLocalization extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/localization/#/Keyword%20Localization/getLocalizedKeywords
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/keywords/localize';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.keywordlocalization.v1+json',
            'Accept' => 'application/vnd.keywordlocalization.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}