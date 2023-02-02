<?php

namespace AmazonAdsApi\CommonResources\AdvertisingAccounts;

use AmazonAdsApi\AdsRequest;

class ManagerAccount
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/1-0/managerAccount#/Manager%20Accounts/UnlinkAdvertisingAccountsToManagerAccountPublicAPI
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function disassociate(array $param, array $body)
    {
        $managerAccountId = $param['managerAccountId'];
        $path = '/managerAccounts/{managerAccountId}/disassociate';
        $path = str_replace('{managerAccountId}', $managerAccountId, $path);
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/1-0/managerAccount#/Manager%20Accounts/createManagerAccount
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/managerAccounts';
        return $this->instance->sendRequest($path, [], $body, 'POST');
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/1-0/managerAccount#/Manager%20Accounts/getManagerAccountsForUser
     * @return mixed
     */
    public function index()
    {
        $path = '/managerAccounts';
        return $this->instance->sendRequest($path, [], [], 'GET');
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/1-0/managerAccount#/Manager%20Accounts/LinkAdvertisingAccountsToManagerAccountPublicAPI
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function associate(array $param, array $body)
    {
        $managerAccountId = $param['managerAccountId'];
        $path = '/managerAccounts/{managerAccountId}/associate';
        $path = str_replace('{managerAccountId}', $managerAccountId, $path);
        $headers = [
            'Content-Type' => 'application/vnd.updateadvertisingaccountsinmanageraccountrequest.v1+json',
            'Accept' => 'application/vnd.updateadvertisingaccountsinmanageraccountresponse.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}