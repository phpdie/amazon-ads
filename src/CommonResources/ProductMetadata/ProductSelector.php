<?php

namespace AmazonAdsApi\ProductMetadata;

use AmazonAdsApi\BaseModel;

class ProductSelector extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/product-metadata/#/Product%20Selector/ProductMetadata
     * @param array $body
     * @return mixed
     */
    public function index(array $body)
    {
        $path = '/product/metadata';
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
            'Content-Type' => 'application/vnd.productmetadatarequest.v1+json',
            'Accept' => 'application/vnd.productmetadataresponse.v1+json',
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }
}