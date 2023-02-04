<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class Drafts extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/listDraftCampaigns
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $path = '/sb/drafts/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/createDraftCampaigns
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sb/drafts/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbdraftcampaignresponse.v3+json',
            'Accept' => 'application/vnd.sbdraftcampaignresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/deleteDraftCampaign
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $draftCampaignId = $param['draftCampaignId'];
        $path = '/sb/drafts/campaigns/{draftCampaignId}';
        $path = str_replace('{draftCampaignId}', $draftCampaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/getDraftCampaign.
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $draftCampaignId = $param['draftCampaignId'];
        $path = '/sb/drafts/campaigns/{draftCampaignId}';
        $path = str_replace('{draftCampaignId}', $draftCampaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/updateDraftCampaigns
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sb/drafts/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbdraftcampaignresponse.v3+json',
            'Accept' => 'application/vnd.sbdraftcampaignresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Drafts/submitDraftCampaign
     * @param array $body
     * @return mixed
     */
    public function submit(array $body)
    {
        $path = '/sb/drafts/campaigns/submit';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbcampaign.v3+json',
            'Accept' => 'application/vnd.sbdraftcampaignresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}