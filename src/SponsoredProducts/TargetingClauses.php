<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class TargetingClauses
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/TargetingClauses/ListSponsoredProductsTargetingClauses
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function  list($profileId, array $body = [])
    {
        $path = '/sp/targets/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spTargetingClause.v3+json',
            'Accept' => 'application/vnd.spTargetingClause.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/TargetingClauses/DeleteSponsoredProductsTargetingClauses
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function delete($profileId, array $body)
    {
        $path = '/sp/targets/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spTargetingClause.v3+json',
            'Accept' => 'application/vnd.spTargetingClause.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/TargetingClauses/CreateSponsoredProductsTargetingClauses
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/targets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spTargetingClause.v3+json',
            'Accept' => 'application/vnd.spTargetingClause.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/TargetingClauses/UpdateSponsoredProductsTargetingClauses
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/targets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spTargetingClause.v3+json',
            'Accept' => 'application/vnd.spTargetingClause.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}