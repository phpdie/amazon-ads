<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class NegativeProductTargeting extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/listNegativeTargets
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $path = '/sb/negativeTargets/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sblistnegativetargetsresponse.v3+json',
            'Accept' => 'application/vnd.sblistnegativetargetsresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/createNegativeTargets
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sb/negativeTargets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbcreatenegativetargetsrequest.v3+json',
            'Accept' => 'application/vnd.sbcreatenegativetargetsrequest.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/archiveNegativeTarget
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $negativeTargetId = $param['negativeTargetId'];
        $path = '/sb/negativeTargets/{negativeTargetId}';
        $path = str_replace('{negativeTargetId}', $negativeTargetId, $path);
        return $this->instance->sendRequest($path, $param, [], 'DELETE');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/getNegativeTarget
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $negativeTargetId = $param['negativeTargetId'];
        $path = '/sb/negativeTargets/{negativeTargetId}';
        $path = str_replace('{negativeTargetId}', $negativeTargetId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20product%20targeting/updateNegativeTargets
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sb/negativeTargets';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.updatenegativetargetsresponse.v3+json',
            'Accept' => 'application/vnd.updatenegativetargetsresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}