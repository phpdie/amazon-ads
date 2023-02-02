<?php

namespace AmazonAdsApi\Billing;

use AmazonAdsApi\BaseModel;

class BillingNotifications extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/invoices/#/Billing%20Notifications/bulkGetBillingNotifications
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/billing/notifications';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.billingnotifications.v1+json',
            'Accept' => 'application/vnd.bulkgetbillingnotificationsresponse.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}