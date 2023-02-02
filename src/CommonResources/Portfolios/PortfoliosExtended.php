<?php

namespace AmazonAdsApi\CommonResources\Portfolios;

use AmazonAdsApi\AdsRequest;

class PortfoliosExtended extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#/Portfolios%20extended/listPortfoliosEx
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/v2/portfolios/extended';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#/Portfolios%20extended/listPortfolioEx
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $portfolioId = $param['portfolioId'];
        $path = '/v2/portfolios/extended/{portfolioId}';
        $path = str_replace('{portfolioId}', $portfolioId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}