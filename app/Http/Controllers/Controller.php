<?php

namespace App\Http\Controllers;
use Auth;
// use App\Http\Requests\Request;
use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;
use Config;

use App\Models\Cart;
// use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   
    public function show_session(Request $request)
    {
        // $value = $request->session()->get('key');
    // $cart = Carts::find($request->session()->getId());
    $session_id = $request->session()->getId();
    $cart = Cart::firstOrCreate(['session_id' => $session_id]);
    // dd($cart);
    // Config::set('cart', $cart);
    // dd(Config::get('cart'));
    // \App\Models\LineItem::create(['cart_id'=>$cart->id, 'product_id'=>'1000039', 'qty'=>3]);

    //return View::share('cart', $cart);;
    return $cart->line_items;

   
    // $session[:cart_id] = @cart.id

        // return $value; 
            // $cart = Carts.create
  //   session[:cart_id] = @cart.id

       // return $request->session()->getId();

        // echo "<pre>";
        // var_dump($request->session());
        // echo "</pre>";
        // dd($request->session());

        //
    }


	public function __construct()
	{

  // def set_cart
  //   $cart = Cart.find(session[:cart_id])
  // rescue ActiveRecord::RecordNotFound
  //   @cart = Cart.create
  //   session[:cart_id] = @cart.id
  // end 

	    $this->middleware(function ($request, $next) {
	        // view()->share('user', $request->user());
          $session_id = $request->session()->getId();
          $cart = Cart::firstOrCreate(['session_id' => $session_id]);
        // $total_price = 0;
        // foreach ($this->line_items as $key => $value) {
        //     $total_price=$total_price+$value->price_amount;
        // }
          
          Config::set('cart', $cart); // Для получения текущей корзины в контроллерах, где нет ID сессии Config::get('cart')
	        view()->share('user', Auth::guard('backpack')->user());
          view()->share('cart', $cart); //cart во всех views
	        return $next($request);
	    });
	    // view()->share('user', auth()->user());
	    // view()->composer('*', function ($view) {
	    //     $view->with('user', auth()->user());
	    // });
	    // $this->account = Account::find(session('account_id'));
	}

// Setting a property on the controller that needs the session:
// If you need the same piece of information in all of your methods, you may opt to set it as a property on the controller:

}
