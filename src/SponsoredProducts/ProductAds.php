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
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function  list($profileId, array $body = [])
    {
        $path = '/sp/productAds/list';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ProductAds/DeleteSponsoredProductsProductAds
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function delete($profileId, array $body)
    {
        $path = '/sp/productAds/delete';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ProductAds/CreateSponsoredProductsProductAds
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/productAds';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/ProductAds/UpdateSponsoredProductsProductAds
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/productAds';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'PUT');
    }
}