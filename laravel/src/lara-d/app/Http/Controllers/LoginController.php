<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Log;

class LoginController extends Controller
{
    //
    public function login(Request $request) {
        Log::debug($request);
        //$user = User::where("userId", "=",$request->userId);
        $user = User::find(2);
        // hash化してpasswordcheckとか
        // 認証結果だけ返却する？
        //foreach($user as $userp){
        //Log::debug($userp);
        Log::debug($user->password);
            if ( isset($user->password) && ( $user->password == $request->password )){
                return "true";
            }
        //}
        return "false";
    }
}
