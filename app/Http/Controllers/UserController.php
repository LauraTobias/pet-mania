<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class UserController extends Controller
{
    public function create()
    {
    }

    public function edit(Request $request) 
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'cep' => ['required', 'string', 'max:255'],
        ]);

        $userDb = DB::selectOne('select * from users where email = ?', [Auth::user()->email]);
        $user = User::findOrFail($userDb->id);

        $user->update([
            'name' => $request->name,
            'address' => $request->address,
            'state' => $request->state,
            'cep' => $request->cep,
        ]);

        return view('dashboard');
    }
}
