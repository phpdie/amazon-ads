<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class BrandSafetyList extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Brand%20Safety%20List/listDomains
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/sd/brandSafety/deny';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Brand%20Safety%20List/createBrandSafetyDenyListDomains
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sd/brandSafety/deny';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Brand%20Safety%20List/deleteBrandSafetyDenyList
     * @return mixed
     */
    public function delete()
    {
        $path = '/sd/brandSafety/deny';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Brand%20Safety%20List/getRequestResults
     * @param array $param
     * @return mixed
     */
    public function getResults(array $param)
    {
        $requestId = $param['requestId'];
        $path = '/sd/brandSafety/{requestId}/results';
        $path = str_replace('{requestId}', $requestId, $path);
        unset($param['requestId']);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Brand%20Safety%20List/getRequestStatus
     * @param array $param
     * @return mixed
     */
    public function getStatus(array $param)
    {
        $requestId = $param['requestId'];
        $path = '/sd/brandSafety/{requestId}/status';
        $path = str_replace('{requestId}', $requestId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Brand%20Safety%20List/listRequestStatus
     * @return mixed
     */
    public function listStatus()
    {
        $path = '/sd/brandSafety/status';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}