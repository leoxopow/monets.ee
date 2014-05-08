<?php

class HomeController extends BaseController
{

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
        $goods = Goods::take(5)->orderBy('id', 'desc')->get();
        foreach ($goods as $k => $goods_item) {
            $json[] = array(
                'id' => $goods_item->id,
                'title' => $goods_item->title,
                'price' => $goods_item->price,
                'thumb' => $goods_item->thumb
            );

        }

        $json = json_encode($json);
        $this->theme->appendTitle("Главная");
        return $this->theme->watch('home', compact('goods', 'json'))->render();
    }

    public function registration()
    {
        $this->theme->appendTitle("Регистрация");
        return $this->theme->watch('registration')->render();
    }

    public function postRegistration()
    {
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

    public function postLogin()
    {

        $validator = Validator::make(Input::all(), array(
            "username" => "required",
            "pass" => "required"
        ));
        if ($validator->passes()) {
            $credentials = array(
                "username" => Input::get("username"),
                "password" => Input::get("pass")
            );
            if (Auth::attempt($credentials)) {
                return Redirect::back();
            }
        }
        return $this->theme->watch('registration')->render();
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::back();
    }

    public function addCategory()
    {
        $input = Input::all();
        $category = new Category();
        $category->title = $input['new_cat'];
        $category->parent = $input['parent_cat'];
        $category->save();
        return Redirect::back();
    }

    public function categoryShow($id)
    {
        $json = array();
        $goods = Category::find($id)->goods()->orderBy('id', 'desc')->with('images')->paginate(12);
        foreach ($goods as $k => $goods_item) {
            $json[] = array(
                'id' => $goods_item->id,
                'title' => $goods_item->title,
                'price' => $goods_item->price,
                'thumb' => $goods_item->thumb
            );

        }

        $json = json_encode($json);
        $this->theme->appendTitle("Категория");
        return $this->theme->watch('category', compact('goods', 'json'))->render();
    }

    public function postGoods()
    {
        $input = Input::all();
        $goods = new Goods();
        $images = new Image();
        $goods->title = $input['title'];
        $goods->price = $input['price'];
        $goods->thumb = 'nophoto.jpg';
        $category = Category::find($input['cat']);
        $file = Input::file('thumbnail');
        $goods->description = $input['description'];
        $goods->save();
        if (Input::hasFile('thumbnail')) {
            $name = Str::random(5).$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file->move('uploads/', $name);
            $images->title_storage = $name;
            $images->save();
            $goods->images()->save($images);
            if($goods->thumb == 'nophoto.jpg') {
                $goods->thumb = $name;
                $goods->save();
            }
        }
        $goods->categories()->attach($category->id);
        return Redirect::back();
    }

    public function goodsShow($id)
    {
        $json = array();
        $goods = Goods::find($id);
        $json[] = array(
            'id' => $goods->id,
            'title' => $goods->title,
            'price' => $goods->price,
            'images' => $goods->thumb
        );

        $json = json_encode($json);
        $this->theme->appendTitle($goods->title);
        return $this->theme->watch('goods', compact('goods','json'))->render();
    }

    public function goodsUpdate($id){
        $input = Input::all();
        $goods = Goods::find($id);
        $goods->title = $input['title'];
        $goods->price = $input['price'];
        $goods->description = $input['description'];
        $goods->save();
        return Redirect::back();
    }
    public function addToCard(){
        $input = Input::all();
        $itemId = $input['good_id'];
        Session::Push('cart', array('item' => $itemId));
        return Response::json(array(1));
    }
    public function showCart(){
        $goods_ids = Session::get('cart');
        $goods = array();
        $json = array();
        foreach($goods_ids as $v) {
            $goods[] = Goods::find($v['item']);
        }
        foreach ($goods as $k => $goods_item) {
            $json[] = array(
                'id' => $goods_item->id,
                'title' => $goods_item->title,
                'price' => $goods_item->price,
                'thumb' => $goods_item->thumb
            );

        }
        $json = json_encode($json);
        $this->theme->appendTitle('Корзина');
        return $this->theme->watch('cart', compact('goods', 'json'))->render();
    }
    public function showOrders(){
        $this->theme->appendTitle('Просмотр заказов');
        return $this->theme->watch('orders')->render;
    }
}