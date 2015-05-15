<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/2/2015
 * Time: 2:50 PM
 */

namespace Repositories;

use App\City;

class CityRepository {

    private $CityModel;

    public function __construct(City $city)
    {
        $this->CityModel = $city;
    }

    /**
     * returns the list of all cities
     *
     * @return mixed the list of cities
     */
    public function getAllCities()
    {
        return City::all();
    }
}