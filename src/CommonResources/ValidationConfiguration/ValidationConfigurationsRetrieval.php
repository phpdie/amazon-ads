<?php

namespace AmazonAdsApi\CommonResources\ValidationConfiguration;

use AmazonAdsApi\BaseModel;

class ValidationConfigurationsRetrieval extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/validation-configuration#/Validation%20Configurations%20Retrieval/getCampaignsValidationConfigs
     * @param array $body
     * @return mixed
     */
    public function campaigns(array $body = [])
    {
        $path = '/validationConfigurations/campaigns';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.AdsApiValidationConfigsServiceLambda.CampaignsResource.v1+json',
            'Accept' => 'application/vnd.AdsApiValidationConfigsServiceLambda.CampaignsResource.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/validation-configuration#/Validation%20Configurations%20Retrieval/getTargetingClausesValidationConfigs
     * @param array $body
     * @return mixed
     */
    public function targetingClauses(array $body = [])
    {
        $path = '/validationConfigurations/targetingClauses';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.AdsApiValidationConfigsServiceLambda.TargetingClausesResource.v1+json',
            'Accept' => 'application/vnd.AdsApiValidationConfigsServiceLambda.TargetingClausesResource.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}