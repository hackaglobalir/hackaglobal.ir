<?php namespace App\Http\Controllers;

use Repositories\CityRepository;
use Repositories\EventRepository;
use Repositories\SettingRepository;
use \App\City;
use \App\Event;
use \App\Setting;

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

        //get the last event
        $eventRepo = new EventRepository(new Event);
        $lastEvent = $eventRepo->getLastEvent();

        //get the 3 posts
        $posts = [];
        $settingRepo = new SettingRepository(new Setting);
        $posts[] = $settingRepo->getSetting('post1')->text;
        $posts[] = $settingRepo->getSetting('post2')->text;
        $posts[] = $settingRepo->getSetting('post3')->text;
        $headers[] = $settingRepo->getSetting('post1h1')->text;
        $headers[] = $settingRepo->getSetting('post2h1')->text;
        $headers[] = $settingRepo->getSetting('post3h1')->text;

        //view the blade template representation
		return view('welcome',compact('cityList','lastEvent','posts','headers'));
	}

}
