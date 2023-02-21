<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request){
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // return $request->email;

        // $teste = DB::table('users')->where('email', $request->email)->where('password', $request->password)->first();
        // return dd($teste);


        if ( Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // $company = DB::table('companies')->where('id', Auth::user()->company_id)->first();
            // return dd($company->id);
            $_SESSION['company_id'] = Auth::user()->company_id;
            return redirect('/dashboard');
        }else{
            return back()->withErrors(['error' => 'Usuário ou senha inválidos']);
        }

    }
}
