<?php

namespace AmazonAdsApi;

use AmazonAdsApi\Url;
use \GuzzleHttp\Psr7\Request;
use \GuzzleHttp\Client;

class AdsRequest
{
    private $path;

    private $url;

    private $country_code;

    private $headers;

    private $instance;

    /**
     * @param mixed $path
     */
    private function setPath($path)
    {
        $this->path = $path;
        $this->setUrl($this->getUrl() . '' . $path);
    }

    /**
     * @return mixed
     */
    private function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    private function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $country_code
     */
    private function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
        $this->setUrl(Url::getUrl($country_code, 'api_url'));
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

    private function __clone()
    {

    }

    public function __construct($country_code, $client_id, $access_token)
    {
        $this->setCountryCode($country_code);
        $header = [
            'Amazon-Advertising-API-ClientId' => $client_id,
            'Authorization' => sprintf("Bearer %s", $access_token)
        ];
        $this->setHeaders($header);
    }

    public static function getInstance($country_code, $client_id, $access_token)
    {
        if (!empty(self::$instance) && self::$instance instanceof self) {
            return self::$instance;
        }
        return new self($country_code, $client_id, $access_token);
    }

    public function sendRequest(string $path, array $param, array $body, $method = 'GET', $headers = [])
    {
        $method = strtoupper(trim($method));
        $this->setPath($path);
        $uri = $this->getUrl();
        $uri .= $param ? '?' . http_build_query($param) : '';
        $body = $body ? json_encode($body) : null;

        $requestHeaders = $this->getHeaders();
        if ($headers) {
            $requestHeaders = array_merge($requestHeaders, $headers);
        }
        $sendRequest = new Request($method, $uri, $param, $body, $requestHeaders);
        return (new Client())->send($sendRequest)->getBody()->getContents();
    }
}