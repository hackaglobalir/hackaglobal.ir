<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
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
                "domain" => $city->domain_name,
                "img" => "/img/tehran.jpg"
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
        $first_name = null;
        $last_name = null;
        if(Session::has('first_name'))
        {
            $first_name = Session::get('first_name');
            $last_name = Session::get('last_name');
        }
        //view the blade template representation
		return view('welcome',compact(
            'cityList',
            'lastEvent',
            'posts',
            'headers',
            'first_name',
            'last_name'));
	}

}
