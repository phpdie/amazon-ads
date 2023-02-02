<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class Keywords
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keywords/ListSponsoredProductsKeywords
     * @param array $body
     * @return mixed
     */
    public function list(array $body = [])
    {
        $path = '/sp/keywords/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spKeyword.v3+json',
            'Accept' => 'application/vnd.spKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keywords/DeleteSponsoredProductsKeywords
     * @param array $body
     * @return mixed
     */
    public function delete(array $body)
    {
        $path = '/sp/keywords/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spKeyword.v3+json',
            'Accept' => 'application/vnd.spKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keywords/CreateSponsoredProductsKeywords
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sp/keywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spKeyword.v3+json',
            'Accept' => 'application/vnd.spKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keywords/UpdateSponsoredProductsKeywords
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sp/keywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spKeyword.v3+json',
            'Accept' => 'application/vnd.spKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}