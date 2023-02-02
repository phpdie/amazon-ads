<?php

namespace AmazonAdsApi;

use AdsRequest;

class BaseModel
{
    protected AdsRequest $instance;

    public function __construct(AdsRequest $instance)
    {
        $this->instance = $instance;
    }
}