<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class Campaigns
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Campaigns/ListSponsoredProductsCampaigns
     * @param array $body
     * @return mixed
     */
    public function index(array $body = [])
    {
        $path = '/sp/campaigns/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spCampaign.v3+json',
            'Accept' => 'application/vnd.spCampaign.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Campaigns/DeleteSponsoredProductsCampaigns
     * @param array $body
     * @return mixed
     */
    public function delete(array $body)
    {
        $path = '/sp/campaigns/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spCampaign.v3+json',
            'Accept' => 'application/vnd.spCampaign.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Campaigns/CreateSponsoredProductsCampaigns
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sp/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spCampaign.v3+json',
            'Accept' => 'application/vnd.spCampaign.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/Campaigns/UpdateSponsoredProductsCampaigns
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sp/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->getProfileId(),
            'Content-Type' => 'application/vnd.spCampaign.v3+json',
            'Accept' => 'application/vnd.spCampaign.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}