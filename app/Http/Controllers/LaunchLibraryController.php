<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;


class LaunchLibraryController extends Controller
{
    public function list()
    {
      return $this->launches()->launches;
    }

    /**
     * Instatiate a new Guzzle Client
     *
     * @return Client
     */
    private function client()
    {
        return new Client;
    }

    /**
     * Gets the array upcoming launches
     *
     * @return json
     */
    private function launches()
    {
      $result = $this->client()->get('https://launchlibrary.net/1.3/launch/next/5');
      return json_decode($result->getBody()->getContents());
    }
}
