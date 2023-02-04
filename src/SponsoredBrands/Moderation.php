<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class Moderation extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Moderation/get_sb_moderation_campaigns__campaignId_
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $campaignId = $param['campaignId'];
        $path = '/sb/moderation/campaigns/{campaignId}';
        $path = str_replace('{campaignId}', $campaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}