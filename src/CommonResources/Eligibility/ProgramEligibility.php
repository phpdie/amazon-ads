<?php

namespace AmazonAdsApi\CommonResources\Eligibility;

use AmazonAdsApi\BaseModel;

class ProgramEligibility
{
    /** https://advertising.amazon.com/API/docs/en-us/eligibility-prod-3p/#/Program%20Eligibility/ProgramEligibility
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function index(array $param, array $body)
    {
        $advertiserId = $param['advertiserId'];
        unset($param['Amazon-Advertising-API-ClientId'], $param['Amazon-Advertising-API-Scope']);
        $path = '/eligibility/programs';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        $headers = array_merge($headers, $param);
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}