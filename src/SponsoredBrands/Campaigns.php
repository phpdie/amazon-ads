<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class Campaigns extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/listCampaigns
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $path = '/sb/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/createCampaigns
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sb/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbcreatecampaignresponse.v3+json',
            'Accept' => 'application/vnd.sbcreatecampaignresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/archiveCampaign
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $campaignId = $param['campaignId'];
        $path = '/sb/campaigns/{campaignId}';
        $path = str_replace('{campaignId}', $campaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/getCampaign
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $campaignId = $param['campaignId'];
        $path = '/sb/campaigns/{campaignId}';
        $path = str_replace('{campaignId}', $campaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/updateCampaigns
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sb/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbupdatecampaignresponse.v3+json',
            'Accept' => 'application/vnd.sbupdatecampaignresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}