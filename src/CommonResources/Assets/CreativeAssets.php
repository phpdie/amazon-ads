<?php

namespace AmazonAdsApi\CommonResources\Assets;

use AmazonAdsApi\BaseModel;

class CreativeAssets extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/creative-asset-library#/Creative%20Assets/getAsset
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $path = '/assets/';
        $assetId = $param['assetId'];
        $path = str_replace('{assetId}', $assetId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/creative-asset-library#/Creative%20Assets/registerAsset
     * @param array $body
     * @return mixed
     */
    public function register(array $body)
    {
        $path = '/assets/register';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/creative-asset-library#/Creative%20Assets/getUploadLocation
     * @param array $body
     * @return mixed
     */
    public function upload(array $body)
    {
        $path = '/assets/upload';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/creative-asset-library#/Creative%20Assets/searchAssets
     * @param array $body
     * @return mixed
     */
    public function search(array $body)
    {
        $path = '/assets/search/';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}