<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class ProductRecommendationService extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Recommendation%20Service/getProductRecommendations
     * @param array $body
     * @return mixed
     */
    public function index(array $body = [])
    {
        $path = '/sp/targets/products/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.spproductrecommendation.v3+json',
            'Accept' => 'application/vnd.spproductrecommendationresponse.asins.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}