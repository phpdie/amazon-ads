<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class NegativeTargetingClauses
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeTargetingClauses/ListSponsoredProductsNegativeTargetingClauses
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function list($profileId, array $body = [])
    {
        $path = '/sp/negativeTargets/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spNegativeTargetingClause.v3+json',
            'Accept' => 'application/vnd.spNegativeTargetingClause.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeTargetingClauses/DeleteSponsoredProductsNegativeTargetingClauses
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function delete($profileId, array $body)
    {
        $path = '/sp/negativeTargets/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spNegativeTargetingClause.v3+json',
            'Accept' => 'application/vnd.spNegativeTargetingClause.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeTargetingClauses/CreateSponsoredProductsNegativeTargetingClauses
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/negativeTargets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spNegativeTargetingClause.v3+json',
            'Accept' => 'application/vnd.spNegativeTargetingClause.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/NegativeTargetingClauses/UpdateSponsoredProductsNegativeTargetingClauses
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/negativeTargets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spNegativeTargetingClause.v3+json',
            'Accept' => 'application/vnd.spNegativeTargetingClause.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}