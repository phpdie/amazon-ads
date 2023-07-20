<?php

namespace AmazonAdsApi;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;

class AdsRequest
{
    private $country_code;

    private $headers;

    private $profileId;

    private static $instance;

    /**
     * @param mixed $country_code
     */
    private function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
    }

    /**
     * @return mixed
     */
    private function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param mixed $headers
     */
    private function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * @return mixed
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * @param mixed $profileId
     */
    public function setProfileId($profileId): void
    {
        $this->profileId = $profileId;
    }

    private function __clone()
    {
    }

    public function __construct($client_id, $country_code, $profileId, $access_token)
    {
        $this->setProfileId($profileId);
        $this->setCountryCode($country_code);
        $header = [
            'Amazon-Advertising-API-ClientId' => $client_id,
            'Authorization' => sprintf("Bearer %s", $access_token)
        ];
        $this->setHeaders($header);
    }

    public static function getInstance($client_id, $country_code, $profileId, $access_token, bool $newInstance = false)
    {
        if ($newInstance) {
            if (!empty(self::$instance) && self::$instance instanceof self) {
                return self::$instance;
            }
        }
        self::$instance = new self($client_id, $country_code, $profileId, $access_token);
        return self::$instance;
    }

    public function sendRequest(string $path, array $param, array $body, $method = 'GET', $headers = [])
    {
        $method = strtoupper(trim($method));
        $uri = Url::getUrl($this->country_code, 'api_url') . $path;
        $uri .= $param ? '?' . http_build_query($param) : '';
        $body = $body ? json_encode($body) : null;

        $requestHeaders = $this->getHeaders();
        if ($headers) {
            $requestHeaders = array_merge($requestHeaders, $headers);
        }
        $sendRequest = new Request($method, $uri, $requestHeaders, $body);
        return (new Client(['timeout' => 300.0, 'connect_timeout' => 300.0]))->send($sendRequest)->getBody()->getContents();
    }
}
