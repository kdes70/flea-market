<?php

namespace App\Parsers\photodoska;

use App\Parsers\ParserInterface;

/**
 *
 */
class Parser implements ParserInterface
{
    protected $headers = [];

    public $url;

    protected $cookie;

    protected $referrer = 'http://google.com';

    function __construct(string $url)
    {
        $this->url = $url;

        $this->headers = [
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
            "Accept-Encoding: gzip, deflate, br",
            "Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4",
            "Connection: keep-alive",
        ];

        $this->cookie = storage_path("app/cookie.txt");
    }

    public function getResult()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookie);
        curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookie);
        curl_setopt($curl, CURLOPT_REFERER, $this->referrer);

        $data = curl_exec($curl);
        curl_close($curl);

        return $data;
    }

}