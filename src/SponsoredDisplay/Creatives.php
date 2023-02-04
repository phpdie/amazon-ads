<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class Creatives extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Creatives/listCreatives
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/sd/creatives';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Creatives/createCreatives
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sd/creatives';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Creatives/updateCreatives
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sd/creatives';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Creatives/postCreativePreview
     * @param array $body
     * @return mixed
     */
    public function createCreative(array $body)
    {
        $path = '/sd/creatives/preview';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Creatives/listCreativeModerations
     * @param array $param
     * @return mixed
     */
    public function listCreative(array $param = ['language' => 'zh-CN'])
    {
        $path = '/sd/moderation/creatives';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }
}