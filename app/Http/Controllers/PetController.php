<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Providers\RouteServiceProvider;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    public function create()
    {
        return view('pets.pet-register');
    }

    public function index()
    {
        $pets = Pet::where('user_id', '=', Auth::user()->id)->paginate(6);

        return view('pets.pet-control',compact('pets'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'petName' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'exists:users'],
            'petType' => ['required', 'string', 'max:255'],
            'petGender' => ['required', 'string', 'max:255'],
            'color' => ['required', 'string', 'max:255'],
            'weight' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'string'],
        ]);

        $email = $request->email ?? Auth::user()->email;
        $user = DB::select('select * from users where email = ?', [$email]);

        Pet::create([
            'name' => $request->petName,
            'bearing' => $request->bearing,
            'type' => $request->petType,
            'gender' => $request->petGender,
            'color' => $request->color,
            'birthday' => $request->birthday,
            'weight' => $request->weight,
            'user_id' => $user[0]->id,
        ]);
        
        if(Auth::user()->isAdmin)
        {
            return redirect(RouteServiceProvider::HOME);
        }

        return redirect(RouteServiceProvider::PET);
    }

    public function edit(Request $request) 
    {
        $request->validate([
            'petName' => ['required', 'string', 'max:255'],
            'petType' => ['required', 'string', 'max:255'],
            'petGender' => ['required', 'string', 'max:255'],
            'color' => ['required', 'string', 'max:255'],
            'weight' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'string'],
        ]);

        $pet = Pet::findOrFail($request->id);

        $pet->update([
            'name' => $request->petName,
            'bearing' => $request->bearing,
            'type' => $request->petType,
            'gender' => $request->petGender,
            'color' => $request->color,
            'birthday' => $request->birthday,
            'weight' => $request->weight,
        ]);

        return redirect(RouteServiceProvider::PET);
    }

    public function update($id)
    {
        $pet = Pet::findOrFail($id);
        return view('pets.pet-edit', ['pet'=>$pet]);
    }

    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();
     
        return redirect(RouteServiceProvider::PET);
    }
}
