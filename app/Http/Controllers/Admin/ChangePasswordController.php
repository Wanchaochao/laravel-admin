<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePasswordRequest;

class ChangePasswordController extends Controller
{
    public function changePasswordForm()
    {
        return view("admin.change_password");
    }

    /**
     * @param ChangePasswordRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        $user = Auth::guard("admin")->user();

        if (! Hash::check($request->old_password, $user->password)) {
            return $this->unprocesableEtity([
                'password' => 'Incorrect password'
            ]);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return $this->success();
    }
}
