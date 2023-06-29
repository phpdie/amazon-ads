<?php

namespace AmazonAdsApi\Reporting;

use AmazonAdsApi\BaseModel;

class Report extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/brand-metrics-openapi#/Report/generateBrandMetricsReport
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/insights/brandMetrics/report';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.insightsBrandMetrics.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/brand-metrics-openapi#/Report/getBrandMetricsReport
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $path = '/insights/brandMetrics/report/{reportId}';
        $reportId = $param['reportId'];
        $path = str_replace('{reportId}', $reportId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}