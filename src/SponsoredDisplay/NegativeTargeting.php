<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class NegativeTargeting extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/listNegativeTargetingClauses
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/sd/negativeTargets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/createNegativeTargetingClauses
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sd/negativeTargets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/archiveNegativeTargetingClause
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $negativeTargetId = $param['negativeTargetId'];
        $path = '/sd/negativeTargets/{negativeTargetId}';
        $path = str_replace('{negativeTargetId}', $negativeTargetId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/getNegativeTargets
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $negativeTargetId = $param['negativeTargetId'];
        $path = '/sd/negativeTargets/{negativeTargetId}';
        $path = str_replace('{negativeTargetId}', $negativeTargetId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/updateNegativeTargetingClauses
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sd/negativeTargets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/listNegativeTargetingClausesEx
     * @param array $param
     * @return mixed
     */
    public function listExtended(array $param = [])
    {
        $path = '/sd/negativeTargets/extended';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/getNegativeTargetsEx
     * @param array $param
     * @return mixed
     */
    public function getExtended(array $param)
    {
        $negativeTargetId = $param['negativeTargetId'];
        $path = '/sd/negativeTargets/extended/{negativeTargetId}';
        $path = str_replace('{negativeTargetId}', $negativeTargetId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}