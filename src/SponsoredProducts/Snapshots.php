<?php

namespace AmazonAdsApi\SponsoredProducts;

use AmazonAdsApi\BaseModel;

class Snapshots extends BaseModel
{
    public function create(array $body)
    {
        $path = '/v2/sp/{recordType}/snapshot';
        $recordType = $body['recordType'];
        $path = str_replace('{recordType}', $recordType, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    public function read(array $param)
    {
        $path = '/v2/sp/snapshots/{snapshotId}';
        $snapshotId = $param['snapshotId'];
        $path = str_replace('{snapshotId}', $snapshotId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    public function download(array $param)
    {
        $path = '/v2/sp/snapshots/{snapshotId}/download';
        $snapshotId = $param['snapshotId'];
        $path = str_replace('{snapshotId}', $snapshotId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}
