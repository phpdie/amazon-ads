<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class Negativekeywords extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/listNegativeKeywords
     * @param array $param
     * @return mixed
     */
    public function index(array $param)
    {
        $path = '/sb/negativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/createNegativeKeywords
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sb/negativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbkeywordresponse.v3+json',
            'Accept' => 'application/vnd.sbkeywordresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/archiveNegativeKeyword
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $keywordId = $param['keywordId'];
        $path = '/sb/negativeKeywords/{keywordId}';
        $path = str_replace('{keywordId}', $keywordId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/getNegativeKeyword
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $keywordId = $param['keywordId'];
        $path = '/sb/negativeKeywords/{keywordId}';
        $path = str_replace('{keywordId}', $keywordId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Negative%20keywords/updateNegativeKeywords
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sb/negativeKeywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbkeywordresponse.v3+json',
            'Accept' => 'application/vnd.sbkeywordresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}