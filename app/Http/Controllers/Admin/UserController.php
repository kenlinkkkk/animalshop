<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
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
        $id_user = $request->get('u');
        $result = null;

        if ($request->hasFile('avatar_file')) {
            $file = $request->avatar_file;
            $data['avatar'] = upload($file, config('variables.upload.one_file'));
        }

        if ($id_user == null) {
            $user = Auth::user();
            $result = $this->userRepository->update($user->id, $data);
        } else {
            $result = $this->userRepository->update($id_user, $data);
        }

        if ($result) {
            $request->session()->flash('success', 'Cập nhật thông tin thành công');
        } else {
            $request->session()->flash('error', 'Cập nhật thông tin không thành công');
        }

        return redirect()->back();
    }

    public function showChangePassword()
    {
        $user = Auth::user();

        $data = compact('user');

        return view('admin.user.change_pass', $data);
    }

    public function changePassword(Request $request)
    {
        $data = $request->except('_token');
        $user = Auth::user();
        $result = null;

        if (bcrypt($data->old_pass) == Auth::user()->password) {
            if ($data->password == $data->confirm_password) {
                $result = $this->userRepository->update($user->id, $data);
            }
        }

        if ($result) {
            $request->session()->flash('success', 'Cập nhật mật khẩu thành công');
        } else {
            $request->session()->flash('error', 'Cập nhật mật khẩu không thành công');
        }

        return redirect()->back();
    }
}
