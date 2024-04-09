<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/users');
        $data = $response->json();
        return view ('users.index', compact ('data'));

    }

    public function create(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/roles');
        $roles = $response->json();
        return view('users.create', compact('roles'));
    }


    public function store(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/users',[
            'name'=> $request->name,
            'lastname'=> $request->lastname,
            'telefono'=> $request->telefono,
            'email'=> $request->email,
            'password'=> $request->password,
            'role_id'=> $request->role_id,


        ]);

        return redirect()->route('users.home');
    }

    public function destroy($idusers){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/users/' . $idusers);
        return redirect()->route('users.index');
    }

    public function show($idusers){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/users/' . $idusers);
        $users = $response->json();
        return view('users.show', compact ('users'));
    }

    public function uptade(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url . '/users/' . $request->id, [
            'name'=> $request->name,
            'lastname'=> $request->lastname,
            'telefono'=> $request->telefono,
            'email'=> $request->email,
            // 'password'=> $request->password,
            'rol_id'=> $request->rol_id,

        ]);

    return redirect()->route('users.index');

    }

    public function home()
    {
        return view('carrusel');
    }
}
