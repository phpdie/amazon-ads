<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class ProductAds
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ProductAds/ListSponsoredProductsProductAds
     * @param array $body
     * @return mixed
     */
    public function index(array $body = [])
    {
        $path = '/sp/productAds/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spProductAd.v3+json',
            'Accept' => 'application/vnd.spProductAd.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ProductAds/DeleteSponsoredProductsProductAds
     * @param array $body
     * @return mixed
     */
    public function delete(array $body)
    {
        $path = '/sp/productAds/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spProductAd.v3+json',
            'Accept' => 'application/vnd.spProductAd.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ProductAds/CreateSponsoredProductsProductAds
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sp/productAds';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spProductAd.v3+json',
            'Accept' => 'application/vnd.spProductAd.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ProductAds/UpdateSponsoredProductsProductAds
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sp/productAds';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spProductAd.v3+json',
            'Accept' => 'application/vnd.spProductAd.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}