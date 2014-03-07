<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
        $this->theme->appendTitle("Главная");
        return $this->theme->watch('home')->render();
    }
    public function registration(){
        $this->theme->appendTitle("Регистрация");
        return $this->theme->watch('registration')->render();
    }

    public function postRegistration() {
        $input = Input::all();
        $user = new User();
        $user->username = $input['username'];
        $user->email = $input['youremail'];
        $user->password = Hash::make($input['pass']);
        $user->firstname = $input['firstname'];
        $user->lastname = $input['lastname'];
        $user->phone = $input['phone'];
        $user->save();
        $this->theme->appendTitle("Регистрация");
        return $this->theme->watch('registration')->render();
    }

    public function postLogin(){

        $validator = Validator::make(Input::all(), array(
            "username" => "required",
            "pass" => "required"
        ));
        if ($validator->passes())
        {
            $credentials = array(
                "username" => Input::get("username"),
                "password" => Input::get("pass")
            );
            if (Auth::attempt($credentials))
            {
                return Redirect::back();
            }
        }
        return $this->theme->watch('registration')->render();
    }

    public function logout(){
        Auth::logout();
        return Redirect::back();
    }

    public function addCategory(){
        $input = Input::all();
        $category = new Category();
        $category->title = $input['new_cat'];
        $category->parent = $input['parent_cat'];
        $category->save();
        return Redirect::back();
    }

    public function categoryShow($id){
        return $this->theme->watch('category')->render();
    }

}