<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class Media extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Media/createUploadResource
     * @param array $body
     * @return mixed
     */
    public function upload(array $body)
    {
        $path = '/media/upload';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Media/completeUpload
     * @param array $body
     * @return mixed
     */
    public function complete(array $body)
    {
        $path = '/media/complete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Media/describeMedia
     * @param array $param
     * @return mixed
     */
    public function describe(array $param)
    {
        $mediaId = $param['mediaId'];
        $path = '/media/describe';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }
}