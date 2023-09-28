<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return auth()->user()->favorites()->get();
    }

    public function user(Request $request)
    {
        return $request->user();
    }

    public function store(Request $request)
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            'success' => true
        ]);
    }

    public function show($id)
    {

        if ( auth()->user()->favorites()->find($id) == null){
            return response()->json([
                'error' => 'user has no favorite products'
            ]);

        }

        $user = User::with('favorites')->find($id);

        return $user;
    }


    public function destroy($favorite_id)
    {
        if(auth()->user()->hasFavorite($favorite_id)){
            auth()->user()->favorites()->detach($favorite_id);

            return response()->json([
                'success' => true
            ]);
        }

        return response()->json([
            'return' => 'User has no favorite products'
        ]);

    }
}
