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
    public function socialInfo()
    {
        //check to see if the user is super admin
        if(Session::get('role') != UserRepository::$roles['sadmin'])
        {
            return redirect('/');
        }

        //get the 3 posts
        $settingRepo = new SettingRepository(new Setting);
        $twitter = $settingRepo->getSetting('twitter')->text;
        $facebook = $settingRepo->getSetting('facebook')->text;
        $instagram = $settingRepo->getSetting('instagram')->text;

        //get the user first and last name
        $first_name = Session::get('first_name');
        $last_name = Session::get('last_name');

        return view('admin_social',compact(
            'first_name',
            'last_name',
            'twitter',
            'facebook',
            'instagram'
        ));
    }

    /**
     * this function can get the information of the socials
     * that are represented on the home page and update it
     *
     * @return mixed Response
     */
    public function updateSocialInfo()
    {
        if(Session::get('role') != UserRepository::$roles['sadmin'])
        {
            return redirect('/');
        }

        //update the 3 posts
        $settingRepo = new SettingRepository(new Setting);

        $settingRepo->setSetting('twitter',   Input::get('twitter'));
        $settingRepo->setSetting('facebook',   Input::get('facebook'));
        $settingRepo->setSetting('instagram',   Input::get('instagram'));

        //return the socials to the user
        $twitter =Input::get('twitter');
        $facebook =Input::get('facebook');
        $instagram =Input::get('instagram');

        $first_name = Session::get('first_name');
        $last_name = Session::get('last_name');

        return view('admin_social',compact(
            'first_name',
            'last_name',
            'twitter',
            'facebook',
            'instagram'
        ));
    }

    /**
     * this function can get the information of the posts
     * that are represented on the home page
     *
     * @return mixed Response
     */
    public function homeInfo()
    {
        //check to see if the user is super admin
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

        //get the user first and last name
        $first_name = Session::get('first_name');
        $last_name = Session::get('last_name');

        //return the 3 posts to the user
        return view('admin_home_info',compact('posts','headers','first_name','last_name'));
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

        $first_name = Session::get('first_name');
        $last_name = Session::get('last_name');

        //return the 3 posts to the user
        return view('admin_home_info',compact('posts','headers','first_name','last_name'));
    }
}
