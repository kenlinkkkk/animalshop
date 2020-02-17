<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

    }

    public function showChangeInfo()
    {
        $user = Auth::user();

        $data = compact('user');

        return view('admin.user.info', $data);
    }

    /**
     * @param Request $request
     */
    public function changeInfo(Request $request) {
        $data = $request->except('_token');

        dd($data);
    }

    public function showChangePassword()
    {
        $user = Auth::user();

        $data = compact('user');

        return view('admin.user.change_pass', $data);
    }

    public function changePassword()
    {

    }
}
