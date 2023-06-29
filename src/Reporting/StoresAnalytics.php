<?php

namespace AmazonAdsApi\Reporting;

use AmazonAdsApi\BaseModel;

class StoresAnalytics extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/stores/open-api#/Stores%20Analytics/getAsinEngagementForStore
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function asinMetrics(array $param, array $body)
    {
        $path = '/stores/{brandEntityId}/asinMetrics';
        $brandEntityId = $param['brandEntityId'];
        $path = str_replace('{brandEntityId}', $brandEntityId, $path);
        $headers = [
            'Content-Type' => 'application/vnd.GetAsinEngagementForStoreRequest.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/stores/open-api#/Stores%20Analytics/getInsightsForStoreAPI
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function insights(array $param, array $body)
    {
        $path = '/stores/{brandEntityId}/insights';
        $brandEntityId = $param['brandEntityId'];
        $path = str_replace('{brandEntityId}', $brandEntityId, $path);
        $headers = [
            'Content-Type' => 'application/vnd.GetInsightsForStoreRequest.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}