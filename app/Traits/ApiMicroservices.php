<?php

namespace App\Traits;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Support\Facades\Http;

trait ApiMicroservices
{
    use ApiResponser;

    public function apiGet($requestUrl, $formParams = [], $header = [])
    {
        if (isset($this->secret)) {
            $header['Authorization'] = $this->secret;
        }
        $response = Http::withHeaders($header)
            ->baseUrl($this->baseUri)
            ->get($requestUrl, $formParams);


        if (!$response->successful()) {
            throw new HttpClientException($response->body(), $response->status());
        }

        return $response;
    }

    public function apiPost($requestUrl, $formParams = [], $header = [])
    {
        if (isset($this->secret)) {
            $header['Authorization'] = $this->secret;
        }
        $response = Http::retry(3, 100, function ($exception) {
            return $exception instanceof ConnectionException;
        })
            ->withHeaders($header)
            ->baseUrl($this->baseUri)
            ->post($requestUrl, $formParams);


        if (!$response->successful()) {
            throw new HttpClientException($response->body(), $response->status());
        }

        return $response;
    }

    public function apiPatch($requestUrl, $formParams = [], $header = [])
    {
        if (isset($this->secret)) {
            $header['Authorization'] = $this->secret;
        }
        $response = Http::retry(3, 100, function ($exception) {
            return $exception instanceof ConnectionException;
        })
            ->withHeaders($header)
            ->baseUrl($this->baseUri)
            ->patch($requestUrl, $formParams);

        if (!$response->successful()) {
            $data = $response->body();
            throw new HttpClientException($data, $response->getState());
        }

        return $response;
    }

    public function apiDelete($requestUrl, $formParams = [], $header = [])
    {
        if (isset($this->secret)) {
            $header['Authorization'] = $this->secret;
        }
        $response = Http::retry(3, 100, function ($exception) {
            return $exception instanceof ConnectionException;
        })
            ->withHeaders($header)
            ->baseUrl($this->baseUri)
            ->delete($requestUrl, $formParams);

        if (!$response->successful()) {
            throw new HttpClientException($response->body(), $response->status());
        }

        return $response;
    }
}
