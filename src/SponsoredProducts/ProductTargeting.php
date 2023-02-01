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
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function productsCount($profileId, array $body = [])
    {
        $path = '/sp/targets/products/count';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spproducttargeting.v3+json',
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getTargetableCategories
     * @param $profileId
     * @return mixed
     */
    public function categories($profileId)
    {
        $path = '/sp/targets/products/count';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/searchBrands
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function brandsSearch($profileId, array $body = [])
    {
        $path = '/sp/negativeTargets/brands/search';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spproducttargeting.v3+json',
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getRefinementsForCategory
     * @param $profileId
     * @param array $param
     * @return mixed
     */
    public function refinements($profileId, array $param)
    {
        $path = '/sp/targets/category/{categoryId}/refinements';
        $categoryId = $param['categoryId'];
        $path = str_replace('{categoryId}', $categoryId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getCategoryRecommendationsForASINs
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function categoriesRecommendations($profileId, array $body = [])
    {
        $path = '/sp/targets/categories/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spproducttargeting.v3+json',
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Product%20Targeting/getNegativeBrands
     * @param $profileId
     * @return mixed
     */
    public function brandsRecommendations($profileId)
    {
        $path = '/sp/negativeTargets/brands/recommendations';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Accept' => 'application/vnd.spproducttargetingresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}