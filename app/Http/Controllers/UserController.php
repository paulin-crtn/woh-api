<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function isUserLogged() {
        $isUserLogged = Auth::check();
        return response()->json($isUserLogged);
    }

    public function show() {
        $currentUser = Auth::user();
        return response()->json($currentUser);
    }
}
