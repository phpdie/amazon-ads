<?php

namespace AmazonAdsApi\Reporting;

use AmazonAdsApi\BaseModel;

class AsynchronousReports extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/offline-report-prod-3p#/Asynchronous%20Reports/createAsyncReport
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/reporting/reports';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.createasyncreportrequest.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/offline-report-prod-3p#/Asynchronous%20Reports/deleteAsyncReport
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $reportId = $param['reportId'];
        $path = '/reporting/reports/{reportId}';
        $path = str_replace('{reportId}', $reportId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/offline-report-prod-3p#/Asynchronous%20Reports/getAsyncReport
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $reportId = $param['reportId'];
        $path = '/reporting/reports/{reportId}';
        $path = str_replace('{reportId}', $reportId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}