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
        $offerts = json_decode($data->getBody()->getContents(),true);
        return $offerts;
    }

    //test data storage to the database for 5 offerts
    public function storeOfferts()
    {
        $client = new \GuzzleHttp\Client();
        $data = $client->request('GET', 'https://demo.appmanager.pl/api/v1/ads');
        $offerts = json_decode($data->getBody()->getContents(),true);

        foreach ($offerts as $offert) {
            for ($i=0;$i<5;$i++){
                if ($offert[$i]['id']){
                    Offerts::create([
                        'admin_name'=>$offert[$i]['admin_name'],
                        'title'=>$offert[$i]['content']['title']

                    ]);

                }
            }
        }

    }
}