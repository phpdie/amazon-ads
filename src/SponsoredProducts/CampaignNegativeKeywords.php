<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class CampaignNegativeKeywords
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/CampaignNegativeKeywords/ListSponsoredProductsCampaignNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function list($profileId, array $body = [])
    {
        $path = '/sp/campaignNegativeKeywords/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spCampaignNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spCampaignNegativeKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/CampaignNegativeKeywords/DeleteSponsoredProductsCampaignNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function delete($profileId, array $body)
    {
        $path = '/sp/campaignNegativeKeywords/delete';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spCampaignNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spCampaignNegativeKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/CampaignNegativeKeywords/CreateSponsoredProductsCampaignNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/campaignNegativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spCampaignNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spCampaignNegativeKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/CampaignNegativeKeywords/UpdateSponsoredProductsCampaignNegativeKeywords
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/campaignNegativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
            'Content-Type' => 'application/vnd.spCampaignNegativeKeyword.v3+json',
            'Accept' => 'application/vnd.spCampaignNegativeKeyword.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}