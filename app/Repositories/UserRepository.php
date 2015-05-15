<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/2/2015
 * Time: 2:50 PM
 */

namespace Repositories;

use App\User;

class UserRepository {

    public static $roles = [
        "sadmin" => 1,
        "admin" => 2,
        "user" => 3
    ];

    private $UserModel;

    public function __construct(User $user)
    {
        $this->UserModel = $user;
    }

    /**
     * check to see if the user is available or not
     *
     * @email string the email of the user
     * @password string the password of the user
     *
     * @return mixed the user or null
     */
    public function checkUserAvailability($email, $password)
    {
        return User::where('email', '=', $email)
                    ->where('password', '=',sha1($password))
                    ->first();
    }

    /**
     * gets the user info based on email
     *
     * @email string the email of the user
     *
     * @return mixed the user or null
     */
    public function getUserInfoBasedOnEmail($email)
    {
        return User::where('email', '=', $email)
            ->first();
    }
}