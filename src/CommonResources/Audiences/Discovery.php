<?php

namespace AmazonAdsApi\Audiences;

use AmazonAdsApi\BaseModel;

class Discovery extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/audiences/#/Discovery/listAudiences
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function audienceSegments(array $param, array $body = [])
    {
        $path = '/audiences/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/audiences/#/Discovery/fetchTaxonomy
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function audienceCategories(array $param, array $body)
    {
        $path = '/audiences/taxonomy/list';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, $body, 'POST', $headers);
    }
}