<?php

namespace AmazonAdsApi\SponsoredDisplay;

use AmazonAdsApi\BaseModel;

class Snapshots extends BaseModel
{
    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Snapshots/createSnapshot
     * @param array $param
     * @param array $body
     * @return mixed
     */
    public function index(array $param, array $body)
    {
        $recordType = $param['recordType'];
        $path = '/sd/{recordType}/snapshot';
        $path = str_replace('{recordType}', $recordType, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], $body, 'POST', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Snapshots/getSnapshot
     * @param array $param
     * @return mixed
     */
    public function read(array $param)
    {
        $snapshotId = $param['snapshotId'];
        $path = '/sd/snapshots/{snapshotId}';
        $path = str_replace('{snapshotId}', $snapshotId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }

    /** https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Snapshots/downloadSnapshot
     * @param array $param
     * @return mixed
     */
    public function download(array $param)
    {
        $snapshotId = $param['snapshotId'];
        $path = '/sd/snapshots/{snapshotId}/download';
        $path = str_replace('{snapshotId}', $snapshotId, $path);
        $headers = [
            'Amazon-Advertising-API-Scope' => $this->instance->getProfileId(),
        ];
        return $this->instance->sendRequest($path, [], [], 'GET', $headers);
    }
}