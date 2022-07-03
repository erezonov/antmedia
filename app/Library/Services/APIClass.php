<?php

namespace App\Library\Services;

use GuzzleHttp\Client;


class APIClass
{

    public $url = 'http://185.209.160.70:5080/LiveApp/rest';
    public function __construct()
    {
        $this->client = new Client();
    }


    public function BroadcastsCreate()
    {

        $name = time();
        $res = $this->client->request(
            'POST',
            $this->url . '/v2/broadcasts/create',
            [
                \GuzzleHttp\RequestOptions::JSON => [
                    'streamId' => $name,
                    'status' => 'proccess'
                ]
            ]
        );

        return $res;
    }

    public function ConferenceRoomsCreate() {
        $res = $this->client->request(
            'POST',
            $this->url . '/v2/broadcasts/conference-rooms',
            [
                \GuzzleHttp\RequestOptions::JSON => [
                    'roomId' => time(),
                    'startDate' => 0,
                    'endDate' => 0,
                    'roomStreamList' => [
                        'roomId'
                    ],
                    'mode' => 'string'
                ]
            ]
        );
        return $res;
    }
}
