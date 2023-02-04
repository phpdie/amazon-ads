<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class TargetingRecommendations extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Targeting%20recommendations/getProductRecommendations
     * @param array $body
     * @return mixed
     */
    public function products(array $body)
    {
        $path = '/sb/recommendations/targets/product/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbproductrecommendations.v3.0+json',
            'Accept' => 'application/vnd.sbproductrecommendationsresponse.v3.0+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Targeting%20recommendations/getTargetingCategories
     * @param array $body
     * @return mixed
     */
    public function categories(array $body)
    {
        $path = '/sb/recommendations/targets/category';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbcategoryrecommendations.v3.0+json',
            'Accept' => 'application/vnd.sbcategoryrecommendationsresponse.v3.0+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Targeting%20recommendations/getBrandRecommendations
     * @param array $body
     * @return mixed
     */
    public function brand(array $body)
    {
        $path = '/sb/recommendations/targets/brand';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbbrandrecommendations.v3.0+json',
            'Accept' => 'application/vnd.sbbrandrecommendationsresponse.v3.0+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}