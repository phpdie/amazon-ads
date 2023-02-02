<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class AdGroups
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/AdGroups/ListSponsoredProductsAdGroups
     * @param array $body
     * @return mixed
     */
    public function index(array $body = [])
    {
        $path = '/sp/adGroups/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spAdGroup.v3+json',
            'Accept' => 'application/vnd.spAdGroup.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/AdGroups/DeleteSponsoredProductsAdGroups
     * @param array $body
     * @return mixed
     */
    public function delete(array $body)
    {
        $path = '/sp/adGroups/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spAdGroup.v3+json',
            'Accept' => 'application/vnd.spAdGroup.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/AdGroups/CreateSponsoredProductsAdGroups
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sp/adGroups';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spAdGroup.v3+json',
            'Accept' => 'application/vnd.spAdGroup.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/AdGroups/UpdateSponsoredProductsAdGroups
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sp/adGroups';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spAdGroup.v3+json',
            'Accept' => 'application/vnd.spAdGroup.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}