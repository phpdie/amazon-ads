<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class Keywords extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/listKeywords
     * @param array $param
     * @return mixed
     */
    public function index(array $param = [])
    {
        $path = '/sb/keywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/createKeywords
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $path = '/sb/keywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbkeywordresponse.v3+json',
            'Accept' => 'application/vnd.sbkeywordresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/archiveKeyword
     * @param array $param
     * @return mixed
     */
    public function delete(array $param)
    {
        $keywordId = $param['keywordId'];
        $path = '/sb/keywords/{keywordId}';
        $path = str_replace('{keywordId}', $keywordId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'DELETE', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/getKeyword
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $keywordId = $param['keywordId'];
        $path = '/sb/keywords/{keywordId}';
        $path = str_replace('{keywordId}', $keywordId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/updateKeywords
     * @param array $body
     * @return mixed
     */
    public function update(array $body)
    {
        $path = '/sb/keywords';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.sbkeywordresponse.v3+json',
            'Accept' => 'application/vnd.sbkeywordresponse.v3+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'PUT', $headers);
    }
}