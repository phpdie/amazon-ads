<?php

namespace AmazonAdsApi\Insights;

use AmazonAdsApi\BaseModel;

class AudienceInsights extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/insights/#/Audience%20insights/insightsGetAudiencesOverlappingAudiences
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $audienceId = $param['audienceId'];
        $adType = $param['adType'];
        $path = '/insights/audiences/{audienceId}/overlappingAudiences';
        $path = str_replace('{audienceId}', $audienceId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Accept' => 'application/vnd.insightsaudiencesoverlap.v2+json',
        ];
        unset($param['audienceId']);
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }
}