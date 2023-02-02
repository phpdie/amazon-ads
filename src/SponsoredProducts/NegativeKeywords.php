<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class NegativeKeywords extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/ListSponsoredProductsNegativeKeywords
     * @param array $body
     * @return mixed
     */
    public function index(array $body = [])
    {
        $path = '/sp/negativeKeywords/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spNegativeKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/DeleteSponsoredProductsNegativeKeywords
     * @param array $body
     * @return mixed
     */
    public function delete(array $body)
    {
        $path = '/sp/negativeKeywords/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spNegativeKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/CreateSponsoredProductsNegativeKeywords
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sp/negativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spNegativeKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/UpdateSponsoredProductsNegativeKeywords
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sp/negativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spNegativeKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}