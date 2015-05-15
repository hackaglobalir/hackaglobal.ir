<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Repositories\SettingRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use \App\Setting;

use Illuminate\Http\Request;
use Repositories\UserRepository;

class AdminController extends Controller {

    public function __construct()
    {
    }

    /**
     * this function can get the information of the posts
     * that are represented on the home page
     *
     * @return mixed Response
     */
    public function homeInfo()
    {
        if(Session::get('role') != UserRepository::$roles['sadmin'])
        {
            return redirect('/');
        }

        //get the 3 posts
        $settingRepo = new SettingRepository(new Setting);
        $posts[] = $settingRepo->getSetting('post1')->text;
        $posts[] = $settingRepo->getSetting('post2')->text;
        $posts[] = $settingRepo->getSetting('post3')->text;
        $headers[] = $settingRepo->getSetting('post1h1')->text;
        $headers[] = $settingRepo->getSetting('post2h1')->text;
        $headers[] = $settingRepo->getSetting('post3h1')->text;

        //return the 3 posts to the user
        return view('admin_home_info',compact('posts','headers'));
    }

    /**
     * this function can get the information of the posts
     * that are represented on the home page
     *
     * @return mixed Response
     */
    public function updateHomeInfo()
    {
        if(Session::get('role') != UserRepository::$roles['sadmin'])
        {
            return redirect('/');
        }

        //update the 3 posts
        $settingRepo = new SettingRepository(new Setting);

        $settingRepo->setSetting('post1',   Input::get('detail1'));
        $settingRepo->setSetting('post2',   Input::get('detail2'));
        $settingRepo->setSetting('post3',   Input::get('detail3'));
        $settingRepo->setSetting('post1h1', Input::get('title1'));
        $settingRepo->setSetting('post2h1', Input::get('title2'));
        $settingRepo->setSetting('post3h1', Input::get('title3'));

        //get the 3 posts
        $posts[]    = Input::get('detail1');
        $posts[]    = Input::get('detail2');
        $posts[]    = Input::get('detail3');
        $headers[]  = Input::get('title1');
        $headers[]  = Input::get('title2');
        $headers[]  = Input::get('title3');

        //return the 3 posts to the user
        return view('admin_home_info',compact('posts','headers'));
    }
}
