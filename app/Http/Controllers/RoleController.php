<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/roles');
        $data = $response->json();
        return view('roles.index', compact('data'));
        // dd($data);
    }

    public function create(){
        return view('roles.create');
    }

    public function store(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/roles',[
            'nombre_rol'=> $request->nombre_rol,
        ]);

        return redirect()->route('roles.index');

    }

    public function destroy($idroles){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/roles/' . $idroles);
        return redirect()->route('roles.index');
    }

    public function show($idroles){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/roles/' . $idroles);
        $roles = $response->json();
        return view('roles.show', compact ('roles'));
    }

    public function uptade(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::put($url . '/roles/' . $request->id, [
            'nombre_rol'=> $request->nombre_rol,
        ]);

    return redirect()->route('roles.index');

    }
}

