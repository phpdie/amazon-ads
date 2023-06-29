<?php

namespace AmazonAdsApi\AmazonDSP\AmazonAttribution;

use AmazonAdsApi\BaseModel;

class AttributionTags extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#/Attribution%20Tags/getPublisherMacroAttributionTag
     * @param array $param
     * @return mixed
     */
    public function nonMacroTemplateTag(array $param)
    {
        $path = '/attribution/tags/nonMacroTemplateTag';
        $publisherIds = $param['publisherIds'];
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/amazon-attribution-prod-3p#/Attribution%20Tags/getPublisherAttributionTagTemplate
     * @param array $param
     * @return mixed
     */
    public function macroTag(array $param)
    {
        $path = '/attribution/tags/macroTag';
        $publisherIds = $param['publisherIds'];
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, $param, [], 'GET', $headers);
    }
}