<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function orders($id) {
        $user = User::find($id);
        dd($user->orders);
    }
}
