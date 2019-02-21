<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 21.02.2019
 * Time: 10:36
 */

namespace App\Services;
interface JobOffertsServiceInterface
{

    public function getOfferts();
    public function storeOfferts();
}