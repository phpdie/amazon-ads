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
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function  list($profileId, array $body = [])
    {
        $path = '/sp/adGroups/list';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/AdGroups/DeleteSponsoredProductsAdGroups
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function delete($profileId, array $body)
    {
        $path = '/sp/adGroups/delete';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/AdGroups/CreateSponsoredProductsAdGroups
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/adGroups';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/AdGroups/UpdateSponsoredProductsAdGroups
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/adGroups';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'PUT');
    }
}