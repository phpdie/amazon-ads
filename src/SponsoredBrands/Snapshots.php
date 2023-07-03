<?php

namespace AmazonAdsApi\SponsoredBrands;

use AmazonAdsApi\BaseModel;

class Snapshots extends BaseModel
{
    public function create(array $body)
    {
        $path = '/v2/hsa/{recordType}/snapshot';
        $recordType = $body['recordType'];
        $path = str_replace('{recordType}', $recordType, $path);
        unset($body['recordType']);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    public function read(array $param)
    {
        $path = '/v2/hsa/snapshots/{snapshotId}';
        $snapshotId = $param['snapshotId'];
        $path = str_replace('{snapshotId}', $snapshotId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}
