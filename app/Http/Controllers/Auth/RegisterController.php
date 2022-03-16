<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;

use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DB;
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
    protected $redirectTo = '/';  //RouteServiceProvider::HOME;

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

        $customMessages = [
            'password.regex' => 'Le mot de passe doit contenir au moins une lettre majuscule ,une lettre minuscule,un chiffre, un caractère spécial'
        ];

        if(!empty($data['poste'])){

            return Validator::make($data, [
                'prenom' => ['required', 'string','min:4','max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required','string', 'email', 'max:255', 'unique:users'],
                'mobile' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:8','confirmed', 'regex:/[a-z]/', 'regex:/[A-Z]/',  'regex:/[0-9]/', 'regex:/[@$!%*_,";:.<=>+(^#?)&]/'],
                //'pseudo' => ['required', 'string', 'max:255', 'unique:users'],
                'poste' => ['required', 'string', 'max:255'],
                'entreprise' => ['required', 'string', 'max:255']

            ],$customMessages);
        }

        return Validator::make($data, [
            'prenom' => ['required', 'string','min:4', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed','regex:/[a-z]/', 'regex:/[A-Z]/',  'regex:/[0-9]/', 'regex:/[@$!%*_,";:.<=>+(^#?)&]/'],
            'last_name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
             //'pseudo' => ['required', 'string', 'max:255', 'unique:users']

        ],$customMessages);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     *
     *
     */


    protected function create(array $data)
    {
        if(request()->file('photoprofile'))
        {
            //recuperation du fichier
            $photo = request()->file('photoprofile');
            //creation d'un nom unique
            $nomphoto = uniqid().'.'. $photo->getClientOriginalExtension();
            //enregistrement en local
            $photo->storeAs('public/photoprofils',$nomphoto);

        }
        else
        {
            $nomphoto = 'imagepardefaut.png';

        }

        if(!empty($data['poste'])){

            return User::create([
                'name' => $data['prenom'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'password' => Hash::make($data['password']),
                'poste' => $data['poste'],
                'nom_entreprise' => $data['entreprise'],
                // 'photoprofile' => $nomphoto,
                'is_professionnel' => 1

            ]);

        }
       
        return User::create([
            'name' => $data['prenom'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);



    }
 
   


}
