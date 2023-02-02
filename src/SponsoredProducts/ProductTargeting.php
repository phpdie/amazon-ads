<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class ProductTargeting
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getTargetableASINCounts
     * @param array $body
     * @return mixed
     */
    public function productsCount(array $body = [])
    {
        $path = '/sp/targets/products/count';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spproducttargeting.v3+json',
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getTargetableCategories
     * @return mixed
     */
    public function categories()
    {
        $path = '/sp/targets/products/count';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/searchBrands
     * @param array $body
     * @return mixed
     */
    public function brandsSearch(array $body = [])
    {
        $path = '/sp/negativeTargets/brands/search';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spproducttargeting.v3+json',
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getRefinementsForCategory
     * @param array $param
     * @return mixed
     */
    public function refinements(array $param)
    {
        $path = '/sp/targets/category/{categoryId}/refinements';
        $categoryId = $param['categoryId'];
        $path = str_replace('{categoryId}', $categoryId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getCategoryRecommendationsForASINs
     * @param array $body
     * @return mixed
     */
    public function categoriesRecommendations(array $body = [])
    {
        $path = '/sp/targets/categories/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spproducttargeting.v3+json',
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getNegativeBrands
     * @return mixed
     */
    public function brandsRecommendations()
    {
        $path = '/sp/negativeTargets/brands/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}