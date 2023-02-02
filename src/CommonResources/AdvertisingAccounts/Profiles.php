<?php

namespace AmazonAdsApi\CommonResources\AdvertisingAccounts;

use AmazonAdsApi\BaseModel;

class Profiles extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/reference/2/profiles#/Profiles/listProfiles
     * @return mixed
     */
    public function index()
    {
        $path = '/v2/profiles';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/2/profiles#/Profiles/updateProfiles
     * @param array $body
     * @return mixed
     */
    public function update(array $body = [])
    {
        $path = '/v2/profiles';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/2/profiles#/Profiles/getProfileById
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $profileId = $param['profileId'];
        $path = '/v2/profiles/{profileId}';
        $path = str_replace('{profileId}', (int)$profileId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }
}