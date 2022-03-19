<?php

class GitHubApi
{
    protected $URL;

    function __construct()
    {
        $this->URL = "https://api.coindesk.com/v1/bpi/currentprice.json";
    }

    protected function coinDeskStructuredResponse($json)
    {
        print_r("Time: " . $json->time->updated . PHP_EOL);
        print_r("Disclaimer: " . $json->disclaimer . PHP_EOL);
        print_r("Chart Name: " . $json->chartName . PHP_EOL);
        print_r("BPI - USD - Code: " . $json->bpi->USD->code . PHP_EOL);
        print_r("BPI - USD - Symbol: " . $json->bpi->USD->symbol . PHP_EOL);
        print_r("BPI - USD - Rate: " . $json->bpi->USD->rate . PHP_EOL);
        print_r("BPI - USD - Description: " . $json->bpi->USD->description . PHP_EOL);
        print_r("BPI - USD - Rate Flat: " . $json->bpi->USD->rate_float . PHP_EOL);
        print("----------------------------------------------------------------" . PHP_EOL);
        print_r("BPI - GBP - Code: " . $json->bpi->GBP->code . PHP_EOL);
        print_r("BPI - GBP - Symbol: " . $json->bpi->GBP->symbol . PHP_EOL);
        print_r("BPI - GBP - Rate: " . $json->bpi->GBP->rate . PHP_EOL);
        print_r("BPI - GBP - Description: " . $json->bpi->GBP->description . PHP_EOL);
        print_r("BPI - GBP - Rate Flat: " . $json->bpi->GBP->rate_float . PHP_EOL);
        print("----------------------------------------------------------------" . PHP_EOL);
        print_r("BPI - EUR - Code: " . $json->bpi->EUR->code . PHP_EOL);
        print_r("BPI - EUR - Symbol: " . $json->bpi->EUR->symbol . PHP_EOL);
        print_r("BPI - EUR - Rate: " . $json->bpi->EUR->rate . PHP_EOL);
        print_r("BPI - EUR - Description: " . $json->bpi->EUR->description . PHP_EOL);
        print_r("BPI - EUR - Rate Flat: " . $json->bpi->EUR->rate_float . PHP_EOL);
    }

    public function makeCoindeskAPICall()
    {
        // Call the endpoint with file_get_contents and print output recursively 
        $res = file_get_contents($this->URL);
        $json = json_decode($res);
        $this->coinDeskStructuredResponse($json);
    }
}

$gitHubApiClass = new GitHubApi();
$gitHubApiClass->makeCoindeskAPICall();
