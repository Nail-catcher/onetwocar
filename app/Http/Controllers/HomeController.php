<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders=Order::with('car', 'botUser')->paginate(30);
        return view('home',['orders'=>$orders]);
    }
}
