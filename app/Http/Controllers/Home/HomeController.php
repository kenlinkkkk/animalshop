<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('client.content.home');
    }

    public function contact()
    {
        return view('client.content.contact');
    }

    public function addToCart(Request $request)
    {

    }

    public function confirmCheckout(Request $request) {
        $data = $request->except('_token');

        dd($data);
        die();
    }


}
