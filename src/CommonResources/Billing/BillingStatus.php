<?php

namespace AmazonAdsApi\Billing;

use AmazonAdsApi\BaseModel;

class BillingStatus extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/invoices/#/Billing%20Status/bulkGetBillingStatus
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/billing/statuses';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.bulkgetbillingstatusrequestbody.v1+json',
            'Accept' => 'application/vnd.bulkgetbillingstatusresponse.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}