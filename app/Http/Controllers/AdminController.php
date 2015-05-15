<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function __construct()
    {
        //checks the session
    }

    /**
     * this function can get the information of the posts
     * that are represented on the home page
     *
     * @return mixed Response
     */
    public function homeInfo()
    {
        //get the 3 posts


        //return the 3 posts to the user
        return view('adminHomeInfo',compact('posts'));
    }

}
