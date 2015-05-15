<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Repositories\UserRepository;
use App\User;

use Illuminate\Http\Request;

class LoginController extends Controller {

    /**
     * Show the login form
     */
	public function index()
    {
        return view('login');
    }

    /**
     * kills the session and redirects to index
     */
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    /**
     * Checks the User credentials
     */
    public function checkLogin()
    {
        $userName = "";
        $password = "";

        //get the input from the user
        if(Input::get('UserName') && Input::get('Password'))
        {
            $userName = Input::get('UserName');
            $password = Input::get('Password');
        }
        else
            return view('login',['valid' => 'false', 'UserName' => $userName]);

        //check user validity
        $userRepo = new UserRepository(new User);
        $user = $userRepo->checkUserAvailability($userName,$password);

        //create session
        if($user == null)
        {
            return view('login',['valid' => 'false', 'UserName' => $userName]);
        }
        else
        {
            Session::put('first_name', $user->first_name);
            Session::put('last_name', $user->last_name);
            Session::put('role', $user->role);
            Session::put('created', date("Y-m-d H:i:s"));

            if($user->role == UserRepository::$roles["sadmin"]
            || $user->role == UserRepository::$roles["admin"]
            )//super admin or city admin
            {
                return redirect('cp_admin');
            }
            else if($user->role == UserRepository::$roles["user"])//user
            {
                return redirect('/');
            }
        }

        //return panel
    }
}
