<?php

namespace AmazonAdsApi\Billing;

use AmazonAdsApi\BaseModel;

class Invoice extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/invoices/#/invoice/getAdvertiserInvoices
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/invoices';
        return $this->instance->sendRequest($path, $param, [], 'GET');
    }

    /** https://advertising.amazon.com/API/docs/en-us/invoices/#/invoice/getInvoice
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $invoiceId = $param['invoiceId'];
        $path = '/invoices/{invoiceId}';
        $path = str_replace('{invoiceId}', $invoiceId, $path);
        return $this->instance->sendRequest($path, [], [], 'GET');
    }
}