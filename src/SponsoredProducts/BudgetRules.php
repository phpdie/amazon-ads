<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\AdsRequest;

class BudgetRules
{
    private AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/GetCampaignsAssociatedWithSPBudgetRule
     * @param $profileId
     * @param array $param
     * @return mixed
     */
    public function getCampaignsAssociated($profileId, array $param)
    {
        $path = '/sp/budgetRules/{budgetRuleId}/campaigns';
        $budgetRuleId = $param['budgetRuleId'];
        $pageSize = $param['pageSize'];
        $path = str_replace('{budgetRuleId}', $budgetRuleId, $path);
        unset($param['budgetRuleId']);
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/CreateAssociatedBudgetRulesForSPCampaigns
     * @param $profileId
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function associatesCampaign($profileId, array $param, array $body)
    {
        $path = '/sp/campaigns/{campaignId}/budgetRules';
        $campaignId = $param['campaignId'];
        unset($param['campaignId']);
        $path = str_replace('{campaignId}', $campaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, $param, $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/ListAssociatedBudgetRulesForSPCampaigns
     * @param $profileId
     * @param array $param
     * @return mixed
     */
    public function getAssociatesCampaign($profileId, array $param)
    {
        $path = '/sp/campaigns/{campaignId}/budgetRules';
        $campaignId = $param['campaignId'];
        unset($param['campaignId']);
        $path = str_replace('{campaignId}', $campaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/DisassociateAssociatedBudgetRuleForSPCampaigns
     * @param $profileId
     * @param array $param
     * @return mixed
     */
    public function disassociatesCampaign($profileId, array $param)
    {
        $path = '/sp/campaigns/{campaignId}/budgetRules/{budgetRuleId}';
        $campaignId = $param['campaignId'];
        $budgetRuleId = $param['budgetRuleId'];
        $path = str_replace(['{campaignId}', '{budgetRuleId}'], [$campaignId, $budgetRuleId], $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/getRuleBasedBudgetHistoryForSPCampaigns
     * @param $profileId
     * @param array $param
     * @return mixed
     */
    public function campaignHistory($profileId, array $param)
    {
        $path = '/sp/campaigns/{campaignId}/budgetRules/budgetHistory';
        $campaignId = $param['campaignId'];
        $path = str_replace('{campaignId}', $campaignId, $path);
        unset($param['campaignId']);
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/CreateBudgetRulesForSPCampaigns
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function create($profileId, array $body)
    {
        $path = '/sp/budgetRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/GetSPBudgetRulesForAdvertiser
     * @param $profileId
     * @param array $param
     * @return mixed
     */
    public function list($profileId, array $param)
    {
        $path = '/sp/budgetRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/UpdateBudgetRulesForSPCampaigns
     * @param $profileId
     * @param array $body
     * @return mixed
     */
    public function update($profileId, array $body)
    {
        $path = '/sp/budgetRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/GetBudgetRuleByRuleIdForSPCampaigns
     * @param $profileId
     * @param array $param
     * @return mixed
     */
    public function read($profileId, array $param)
    {
        $path = '/sp/budgetRules/{budgetRuleId}';
        $budgetRuleId = $param['budgetRuleId'];
        $path = str_replace('{budgetRuleId}', $budgetRuleId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $profileId,
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}