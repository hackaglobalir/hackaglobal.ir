<?php namespace App\Http\Controllers;

use Repositories\CityRepository;
use \App\City;

class WelcomeController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        //get all the cities from the database
        $cityRepo = new CityRepository(new City);
        $cities = $cityRepo->getAllCities();

        //addCities to new array and send to blade template
        //from representation
        $cityList = [];
        foreach($cities as $city)
        {
            $cityList[] = [
                "title" => $city->title,
                "domain" => $city->domain_name
            ];
        }

        //view the blade template representation
		return view('welcome',compact('cityList','lastEvent'));
	}

}
