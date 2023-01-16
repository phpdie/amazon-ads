<?php


namespace AmazonAdsApi\SponsoredProducts;


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
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/DeleteSponsoredProductsNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function delete($profileId, array $body)
    {
        $path = '/sp/negativeKeywords/delete';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/CreateSponsoredProductsNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/negativeKeywords';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeKeywords/UpdateSponsoredProductsNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/negativeKeywords';
        return $this->instance->requestWithProfileId($profileId, $path, $body, 'PUT');
    }
}