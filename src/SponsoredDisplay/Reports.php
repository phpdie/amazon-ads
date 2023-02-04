<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class Reports extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Reports/getReportStatus
     * @param array $param
     * @return mixed
     */
    public function getStatus(array $param)
    {
        $reportId = $param['reportId'];
        $path = '/v2/reports/{reportId}';
        $path = str_replace('{reportId}', $reportId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Reports/downloadReport
     * @param array $param
     * @return mixed
     */
    public function download(array $param)
    {
        $reportId = $param['reportId'];
        $path = '/v2/reports/{reportId}/download';
        $path = str_replace('{reportId}', $reportId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Reports/requestReport
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function create(array $param, array $body)
    {
        $recordType = $param['recordType'];
        $path = '/sd/{recordType}/report';
        $path = str_replace('{recordType}', $recordType, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}