<?php

namespace AmazonAdsApi\CommonResources\Moderation;

use AmazonAdsApi\BaseModel;

class ModerationResults extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/moderation#/Moderation%20Results/moderationResults
     * @param array $body
     * @return mixed
     */
    public function results(array $body)
    {
        $path = '/moderation/results';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.moderationresultsrequest.v4.1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}