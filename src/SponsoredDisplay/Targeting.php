<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class Targeting extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/listTargetingClauses
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/sd/targets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/createTargetingClauses
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sd/targets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/archiveTargetingClause
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $targetId = $param['targetId'];
        $path = '/sd/targets/{targetId}';
        $path = str_replace('{targetId}', $targetId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/getTargets
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $targetId = $param['targetId'];
        $path = '/sd/targets/{targetId}';
        $path = str_replace('{targetId}', $targetId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/updateTargetingClauses
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sd/targets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/listTargetingClausesEx
     * @param array $param
     * @return mixed
     */
    public function listExtended(array $param = [])
    {
        $path = '/sd/targets/extended';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/getTargetsEx
     * @param array $param
     * @return mixed
     */
    public function getExtended(array $param)
    {
        $targetId = $param['targetId'];
        $path = '/sd/targets/extended/{targetId}';
        $path = str_replace('{targetId}', $targetId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}