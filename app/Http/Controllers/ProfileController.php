<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request){
        $id = $request->id;
        $name = "Donald Trump";
        $age = "75";
        // Create data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set cookie
        $cookieName = "access_token";
        $cookieValue = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME']; // Use single quotes correctly
        $secure = false;
        $httpOnly = true;

        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        // Return response with data and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
