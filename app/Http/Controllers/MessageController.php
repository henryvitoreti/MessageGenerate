<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function generate(Request $request)
    {
        return view("message", ["message" => $request->get("message")])->render();
    }
}
