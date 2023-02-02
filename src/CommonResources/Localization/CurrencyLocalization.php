<?php

namespace AmazonAdsApi\CommonResources\Localization;

use AmazonAdsApi\BaseModel;

class CurrencyLocalization extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/localization/#/Currency%20Localization/getLocalizedCurrencies
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/currencies/localize';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.currencylocalization.v1+json',
            'Accept' => 'application/vnd.currencylocalization.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}