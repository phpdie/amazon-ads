<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class ProductTargeting extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/listTargets
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/sb/targets/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sblisttargetsresponse.v3+json',
            'Accept' => 'application/vnd.sblisttargetsresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/createTargets
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sb/targets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbcreatetargetsresponse.v3+json',
            'Accept' => 'application/vnd.sbcreatetargetsresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/archiveTarget
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $targetId = $param['targetId'];
        $path = '/sb/targets/{targetId}';
        $path = str_replace('{targetId}', $targetId, $path);
        return $this->instance->sendRequest($path, $param, [], 'DELETE');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/getTarget
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $targetId = $param['targetId'];
        $path = '/sb/targets/{targetId}';
        $path = str_replace('{targetId}', $targetId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Product%20targeting/updateTargets
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sb/targets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.updatetargetsresponse.v3+json',
            'Accept' => 'application/vnd.updatetargetsresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}