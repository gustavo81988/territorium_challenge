<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisteredPeople;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function saveForm(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:60',
            'email' => 'required|unique:registered_people|email',
            'about' => 'required|max:200'
        ]);

        $people = new RegisteredPeople;
        $people->name = $request->name;
        $people->email = $request->email;
        $people->about = $request->about;
        $people->save();
    }

    public function getPeople(){
        $people = RegisteredPeople::select(['id', 'name', 'email', 'about']);

        return response()->json([
            'data' => $people->get()
        ]);
    }
}
