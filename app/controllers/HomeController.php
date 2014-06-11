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
        $this->theme->appendTitle("Главная");
        return $this->theme->watch('home', compact('goods'))->render();
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
        $goods = Category::find($id)->goods()->orderBy('id', 'desc')->with('images')->paginate(12);
        $this->theme->appendTitle("Категория");
        return $this->theme->watch('category', compact('goods'))->render();
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
        $goods = Goods::find($id);
        $this->theme->appendTitle($goods->title);
        return $this->theme->watch('goods', compact('goods'))->render();
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
        Session::push('cart', array('item' => $itemId));
        $goods_count = count(Session::get('cart'));
        return Response::json(array($goods_count));
    }
    public function showCart(){
        if(Session::get('cart')){
            $goods_ids = Session::get('cart');
            $goods = array();
            foreach($goods_ids as $v) {
                $goods[] = Goods::find($v['item']);
            }
        }
        $this->theme->appendTitle('Корзина');
        return $this->theme->watch('cart', compact('goods'))->render();
    }

    public function deleteFromCart(){
        $input = Input::all();
        $goods_ids = Session::get('cart');
        unset($goods_ids[$input['number_goods']]);
        sort($goods_ids);
        Session::set('cart', $goods_ids);
        return Redirect::back();
    }
    public function deleteGoods(){
        $input = Input::all();
        Goods::find($input['goodsId'])->delete();
        return Redirect::route('home');
    }
    public function addOrder(){
        $input = Input::all();
        $order = new Order();
        $order->goods = serialize($input['goods']);
        $order->status = 0;
        $order->customer = $input['your_name'];
        $order->customer_mail = $input['your_mail'];
        $order->customer_phone = $input['your_phone'];
        $order->save();
        Session::forget('cart');
        return Redirect::route('home');
    }
    public function showOrders(){
        $orders = Order::orderBy('id','desc')->paginate(15);
        $this->theme->appendTitle('Просмотр заказов');
        return $this->theme->watch('orders', compact('orders'))->render();
    }
    public function showOrder($id){
        $order = Order::find($id);
        $goods_ids = unserialize($order->goods);
        $goods = Goods::whereIn('id', $goods_ids)->get();

        return $this->theme->watch('order', compact('order', 'goods'))->render();
    }
    public function saveStatus(){
        $input = Input::all();
        $order = Order::find($input['id']);
        $order->status = $input['status'];
        $order->save();
        if($input['status'] == 0)
            return 'В ожидании';
        elseif($input['status'] == 1)
            return 'В обработке';
        elseif($input['status'] == 2)
            return 'Выполнен';

    }
    public function addNews(){
        $input = Input::all();
        $news = new News();
        $news->title = $input['news_title'];
        $news->news_content = $input['news_content'];
        $news->save();
        return Redirect::back();
    }
    public function showNews(){
        $news = News::paginate(10);
        $this->theme->appendTitle("Новости");
        return $this->theme->watch('news', compact('news'))->render();
    }
    public function oneNews($id){
        $news = News::find($id);
        $this->theme->appendTitle($news->title);
        return $this->theme->watch('newsone', compact('news'))->render();
    }
    public function editNews($id){
        $input = Input::all();
        $news = News::find($id);
        $news->title = $input['title'];
        $news->news_content = $input['news_content'];
        $news->save();
        return Redirect::back();
    }

}