<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AuthController as BaseAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseAuthController
{
    public function getLogout(Request $request)
    {
        $this->guard()->logout();

        session()->remove(Auth::guard('admin')->getName());
        // $request->session()->invalidate();

        return redirect(config('admin.route.prefix'));
    }
}
