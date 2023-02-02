<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class BudgetRules extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/GetCampaignsAssociatedWithSPBudgetRule
     * @param array $param
     * @return mixed
     */
    public function getCampaignsAssociated(array $param)
    {
        $path = '/sp/budgetRules/{budgetRuleId}/campaigns';
        $budgetRuleId = $param['budgetRuleId'];
        $pageSize = $param['pageSize'];
        $path = str_replace('{budgetRuleId}', $budgetRuleId, $path);
        unset($param['budgetRuleId']);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/CreateAssociatedBudgetRulesForSPCampaigns
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function associatesCampaign(array $param, array $body)
    {
        $path = '/sp/campaigns/{campaignId}/budgetRules';
        $campaignId = $param['campaignId'];
        unset($param['campaignId']);
        $path = str_replace('{campaignId}', $campaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/ListAssociatedBudgetRulesForSPCampaigns
     * @param array $param
     * @return mixed
     */
    public function getAssociatesCampaign(array $param)
    {
        $path = '/sp/campaigns/{campaignId}/budgetRules';
        $campaignId = $param['campaignId'];
        unset($param['campaignId']);
        $path = str_replace('{campaignId}', $campaignId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/DisassociateAssociatedBudgetRuleForSPCampaigns
     * @param $profileId
     * @param array $param
     * @return mixed
     */
    public function disassociatesCampaign(array $param)
    {
        $path = '/sp/campaigns/{campaignId}/budgetRules/{budgetRuleId}';
        $campaignId = $param['campaignId'];
        $budgetRuleId = $param['budgetRuleId'];
        $path = str_replace(['{campaignId}', '{budgetRuleId}'], [$campaignId, $budgetRuleId], $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/getRuleBasedBudgetHistoryForSPCampaigns
     * @param array $param
     * @return mixed
     */
    public function campaignHistory(array $param)
    {
        $path = '/sp/campaigns/{campaignId}/budgetRules/budgetHistory';
        $campaignId = $param['campaignId'];
        $path = str_replace('{campaignId}', $campaignId, $path);
        unset($param['campaignId']);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/CreateBudgetRulesForSPCampaigns
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sp/budgetRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/GetSPBudgetRulesForAdvertiser
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $path = '/sp/budgetRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/UpdateBudgetRulesForSPCampaigns
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sp/budgetRules';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-products/3-0/openapi/prod#/BudgetRules/GetBudgetRuleByRuleIdForSPCampaigns
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $path = '/sp/budgetRules/{budgetRuleId}';
        $budgetRuleId = $param['budgetRuleId'];
        $path = str_replace('{budgetRuleId}', $budgetRuleId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}