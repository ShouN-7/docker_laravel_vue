<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function login(Request $request) {
        $user = User::find($request->userId);
        // hash化してpasswordcheckとか
        // 認証結果だけ返却する？
        //
        if ( isset($user) || ( $user->password == $request->password )){
            return true;
        }
        return false;
    }
}
