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
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function list($profileId, array $body = [])
    {
        $path = '/sp/keywords/list';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keywords/DeleteSponsoredProductsKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function delete($profileId, array $body)
    {
        $path = '/sp/keywords/delete';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keywords/CreateSponsoredProductsKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/keywords';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Keywords/UpdateSponsoredProductsKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/keywords';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'PUT');
    }
}