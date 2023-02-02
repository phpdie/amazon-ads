<?php

namespace AmazonAdsApi\CommonResources\Localization;

use AmazonAdsApi\BaseModel;

class TargetingExpressionLocalization extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/localization/#/Targeting%20Expression%20Localization/getLocalizedTargetingExpression
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/targetingExpression/localize';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.targetingexpressionlocalization.v1+json',
            'Accept' => 'application/vnd.targetingexpressionlocalization.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}