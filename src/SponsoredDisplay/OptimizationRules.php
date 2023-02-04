<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class OptimizationRules extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Optimization%20rules%20%5BPreview%20Only%5D/listOptimizationRules
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/sd/optimizationRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Optimization%20rules%20%5BPreview%20Only%5D/createOptimizationRules
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sd/optimizationRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Optimization%20rules%20%5BPreview%20Only%5D/disassociateOptimizationRule
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $adGroupId = $param['adGroupId'];
        $optimizationRuleId = $param['optimizationRuleId'];
        $path = '/sd/adGroups/{adGroupId}/optimizationRules/{optimizationRuleId}';
        $path = str_replace(['{adGroupId}', '{optimizationRuleId}'], [$adGroupId, $optimizationRuleId], $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Optimization%20rules%20%5BPreview%20Only%5D/updateOptimizationRules
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sd/optimizationRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Optimization%20rules%20%5BPreview%20Only%5D/get_sd_optimizationRules__optimizationRuleId_
     * @param array $param
     * @return mixed
     */
    public function getOptimizationRule(array $param)
    {
        $optimizationRuleId = $param['optimizationRuleId'];
        $path = '/sd/optimizationRules/{optimizationRuleId}';
        $path = str_replace('{optimizationRuleId}', $optimizationRuleId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Optimization%20rules%20%5BPreview%20Only%5D/associateOptimizationRulesWithAdGroup
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function associateOptimizationRule(array $param, array $body)
    {
        $adGroupId = $param['adGroupId'];
        $path = '/sd/adGroups/{adGroupId}/optimizationRules';
        $path = str_replace('{adGroupId}', $adGroupId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Optimization%20rules%20%5BPreview%20Only%5D/associateOptimizationRulesWithAdGroup
     * @param array $param
     * @return mixed
     */
    public function listOptimizationRule(array $param)
    {
        $adGroupId = $param['adGroupId'];
        $path = '/sd/adGroups/{adGroupId}/optimizationRules';
        $path = str_replace('{adGroupId}', $adGroupId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}