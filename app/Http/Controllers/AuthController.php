<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Redirect;

class AuthController extends Controller
{


    /**
     * Форма авторизации
     */

    public function formAuth()
    {
        $test = Auth::check() ? 'add' : 'login';
        return redirect($test);
    }





    public function auth(UserCreateRequest $request)
    {

        

        if ($request->fails()) {
            
            $messages = $request->messages();
            return Redirect::back()->withErrors($messages)->withInput();
        }

        if (Auth::attempt(['Email' => $request['email'], 'password' => $request->password])) {

            return redirect('/add');
        } else {
            return Redirect::back()->withErrors(['field' => ['Error auth']]);
        }
    }

    public function formRegister()
    {
        return view('register');
    }

    public function register(UserCreateRequest $request)
    {
        

        /*
        *   Если ошибка валидации
        */
        if ($request->fails()) {
            $failedRules = $validator->failed();
            $messages = $validator->messages();
            return Redirect::back()->withErrors($messages)->withInput();
        }
        /*
        *   Если нет - создаём пользователя
        */
        $User = new User();
        $User->create($request->all());

        return redirect('/auth');
    }
}
