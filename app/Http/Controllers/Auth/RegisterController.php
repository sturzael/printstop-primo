<?php

namespace Primo\Http\Controllers\Auth;
use Input;
use Primo\User;
use Primo\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      $apiKey = config('global.apiKey');
      $apiPassword = config('global.password');

      $client = new \GuzzleHttp\Client();
      $res = $client->request("GET","http://online.printstop.co.nz:80/API/api/customers?customerCode=".$data['code']."&sortColumn=Code&includeDeliveryAddresses=false", [
        'auth' => [$apiKey, $apiPassword]
      ]);

      $decodedResponse =  json_decode($res->getBody(),true);

      if ($decodedResponse['Details']['TotalItemCount'] >= 1) {
        $isValid = $data['code'];
      }else {
        $isValid = 'isnotavalidtoken';
      }

      return Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'code' => 'required|string|min:2|max:25|unique:users|in:'.$isValid,
          'password' => 'required|string|min:6|confirmed',
      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Primo\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'code' => $data['code'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
