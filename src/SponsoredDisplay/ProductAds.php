<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class ProductAds extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/listProductAds
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/sd/productAds';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/createProductAds
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sd/productAds';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/archiveProductAd
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $adId = $param['adId'];
        $path = '/sd/productAds/{adId}';
        $path = str_replace('{adId}', $adId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/getProductAd
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $adId = $param['adId'];
        $path = '/sd/productAds/{adId}';
        $path = str_replace('{adId}', $adId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/updateProductAds
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sd/productAds';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/listProductAdsEx
     * @param array $param
     * @return mixed
     */
    public function listExtended(array $param = [])
    {
        $path = '/sd/productAds/extended';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/getProductAdResponseEx
     * @param array $param
     * @return mixed
     */
    public function getExtended(array $param)
    {
        $adId = $param['adId'];
        $path = '/sd/productAds/extended/{adId}';
        $path = str_replace('{adId}', $adId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}