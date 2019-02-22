<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 21.02.2019
 * Time: 10:36
 */

namespace App\Services;


use App\Offerts;

class JobOffertsService implements JobOffertsServiceInterface
{


    //downloading data from api

    public function getOfferts()
    {
        $client = new \GuzzleHttp\Client();
        $data = $client->request('GET', 'https://demo.appmanager.pl/api/v1/ads');
        $offerts = json_decode($data->getBody()->getContents());
        return $offerts->data;
    }



}