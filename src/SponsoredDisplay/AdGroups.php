<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class AdGroups extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/listAdGroups
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/sd/adGroups';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/createAdGroups
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sd/adGroups';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/archiveAdGroup
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $adGroupId = $param['adGroupId'];
        $path = '/sd/adGroups/{adGroupId}';
        $path = str_replace('{adGroupId}', $adGroupId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/getAdGroup
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $adGroupId = $param['adGroupId'];
        $path = '/sd/adGroups/{adGroupId}';
        $path = str_replace('{adGroupId}', $adGroupId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/updateAdGroups
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sd/adGroups';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/listAdGroupsEx
     * @param array $param
     * @return mixed
     */
    public function listExtended(array $param = [])
    {
        $path = '/sd/adGroups/extended';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/getAdGroupResponseEx
     * @param array $param
     * @return mixed
     */
    public function getExtended(array $param)
    {
        $adGroupId = $param['adGroupId'];
        $path = '/sd/adGroups/extended/{adGroupId}';
        $path = str_replace('{adGroupId}', $adGroupId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}