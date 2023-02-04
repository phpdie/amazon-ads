<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class Reports extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Reports/post_v2_hsa__recordType__report
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function index(array $param, array $body)
    {
        $recordType = $param['recordType'];
        $path = '/v2/hsa/{recordType}/report';
        $path = str_replace('{recordType}', $recordType, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Reports/get_v2_reports__reportId_
     * @param array $param
     * @return mixed
     */
    public function status(array $param)
    {
        $reportId = $param['reportId'];
        $path = '/v2/reports/{reportId}';
        $path = str_replace('{reportId}', $reportId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Reports/downloadReport
     * @param array $param
     * @return mixed
     */
    public function downloads(array $param)
    {
        $reportId = $param['reportId'];
        $path = '/v2/reports/{reportId}/download';
        $path = str_replace('{reportId}', $reportId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}