<?php

class GitHubApi
{
    protected $URL;

    function __construct()
    {
        $this->URL = "https://api.coindesk.com/v1/bpi/currentprice.json";
    }

    public function makeZenApiCall()
    {
        // Initiate curl session in a variable (resource)
        echo $this->URL;
        $res = file_get_contents($this->URL);
        $json = json_decode($res);
        print_r($json);
    }
}

$gitHubApiClass = new GitHubApi();
$gitHubApiClass->makeZenApiCall();
