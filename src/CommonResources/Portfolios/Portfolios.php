<?php

namespace AmazonAdsApi\CommonResources\Portfolios;

use AmazonAdsApi\BaseModel;

class Portfolios extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#/Portfolios/listPortfolios
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/v2/portfolios';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#/Portfolios/updatePortfolios
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/v2/portfolios';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#/Portfolios/createPortfolios
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/v2/portfolios';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/reference/2/portfolios#/Portfolios/listPortfolio
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $portfolioId = $param['portfolioId'];
        $path = '/v2/portfolios/{portfolioId}';
        $path = str_replace('{portfolioId}', $portfolioId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}