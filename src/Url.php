<?php


namespace AmazonAdsApi;


use http\Exception\InvalidArgumentException;

class Url
{
    const MAPPING = [
        'NA' => [
            'api_url' => 'https://advertising-api.amazon.com',
            'auth_grant_url' => 'https://www.amazon.com/ap/oa',
            'token_url' => 'https://api.amazon.com/auth/o2/token',
        ],
        'EU' => [
            'api_url' => 'https://advertising-api-eu.amazon.com',
            'auth_grant_url' => 'https://eu.account.amazon.com/ap/oa',
            'token_url' => 'https://api.amazon.co.uk/auth/o2/token',
        ],
        'FE' => [
            'api_url' => 'https://advertising-api-fe.amazon.com',
            'auth_grant_url' => 'https://apac.account.amazon.com/ap/oa',
            'token_url' => 'https://api.amazon.co.jp/auth/o2/token',
        ]
    ];

    const COUNTRY_CODE_IDENTIFIERS = [
        //North America
        'CA' => 'NA',
        'US' => 'NA',
        'MX' => 'NA',
        'BR' => 'NA',
        //Europe
        //differ SP-API: https://advertising.amazon.com/API/docs/en-us/info/api-overview
        //differ SP-API: https://developer-docs.amazon.com/sp-api/docs/marketplace-ids
        'ES' => 'EU',
        'UK' => 'EU',
        'FR' => 'EU',
        'NL' => 'EU',
        'DE' => 'EU',
        'IT' => 'EU',
        'PL' => 'EU',
        'EG' => 'EU',
        'TR' => 'EU',
        'SA' => 'EU',
        'AE' => 'EU',
        //Far East
        'SG' => 'FE',
        'AU' => 'FE',
        'JP' => 'FE',
    ];

    public static function getUrl($country_code, $type = 'api_url')
    {
        $country_code_identifiers = self::COUNTRY_CODE_IDENTIFIERS[$country_code];
        if (empty($country_code_identifiers)) {
            throw new InvalidArgumentException('bad argument country_cod');
        }
        if (!in_array($type, ['api_url', 'auth_grant_url', 'token_url'])) {
            throw new InvalidArgumentException('bad argument type');
        }
        return self::MAPPING[$country_code_identifiers][$type];
    }
}