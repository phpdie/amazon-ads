<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class Forecasts extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Forecasts/createSDForecast
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/sd/forecasts';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sdforecasts.v3.0+json',
            'Accept' => 'application/vnd.sdforecasts.v3.0+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}