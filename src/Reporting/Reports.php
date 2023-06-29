<?php

namespace AmazonAdsApi\Reporting;

use AmazonAdsApi\BaseModel;

class Reports extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/dsp-reports-beta-3p#/Reports/createReportV3
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function create(array $param, array $body)
    {
        $path = '/accounts/{accountId}/dsp/reports';
        $accountId = $param['accountId'];
        $path = str_replace('{accountId}', $accountId, $path);
        $headers = [
            'Content-Type' => 'application/vnd.dspcreatereports.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/dsp-reports-beta-3p#/Reports/getCampaignReportV3
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $path = '/accounts/{accountId}/dsp/reports/{reportId}';
        $accountId = $param['accountId'];
        $reportId = $param['reportId'];
        $path = str_replace(['{accountId}', '{reportId}'], [$accountId, $reportId], $path);
        return $this->instance->sendRequest($path, [], [], 'GET', []);
    }
}