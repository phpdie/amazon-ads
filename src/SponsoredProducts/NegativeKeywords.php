<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class NegativeKeywords
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/ListSponsoredProductsNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function  list($profileId, array $body = [])
    {
        $path = '/sp/negativeKeywords/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spCampaign.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/DeleteSponsoredProductsNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function delete($profileId, array $body)
    {
        $path = '/sp/negativeKeywords/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spCampaign.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/CreateSponsoredProductsNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/negativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spCampaign.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/UpdateSponsoredProductsNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/negativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spCampaign.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}