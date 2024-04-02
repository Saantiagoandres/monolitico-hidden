<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function futbol() {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/categories');
        $allData = $response->json();

        // Filtrar los datos manualmente
        $filteredData = array_filter($allData, function($item) {
            return isset($item['nombre_talento']) && $item['nombre_talento'] === 'Futbol';
        });

        // Resetear los índices del array
        $filteredData = array_values($filteredData);

        return view('categories.futbol', compact('filteredData'));
        // dd($filteredData);
    }

    public function danza() {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/categories');
        $allData = $response->json();

        // Filtrar los datos manualmente
        $filteredData = array_filter($allData, function($item) {
            return isset($item['nombre_talento']) && $item['nombre_talento'] === 'Danza';
        });

        // Resetear los índices del array
        $filteredData = array_values($filteredData);

        return view('categories.danza', compact('filteredData'));
        // dd($filteredData);
    }

    public function canto() {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/categories');
        $allData = $response->json();

        // Filtrar los datos manualmente
        $filteredData = array_filter($allData, function($item) {
            return isset($item['nombre_talento']) && $item['nombre_talento'] === 'Canto';
        });

        // Resetear los índices del array
        $filteredData = array_values($filteredData);

        return view('categories.canto', compact('filteredData'));
        // dd($filteredData);
    }

    public function arte() {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/categories');
        $allData = $response->json();

        // Filtrar los datos manualmente
        $filteredData = array_filter($allData, function($item) {
            return isset($item['nombre_talento']) && $item['nombre_talento'] === 'Arte';
        });

        // Resetear los índices del array
        $filteredData = array_values($filteredData);

        return view('categories.Arte', compact('filteredData'));
        // dd($filteredData);
    }





    public function create(){
        return view('categories.create');
    }




    public function store(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url . '/categories',[
            'descripcion'=> $request->descripcion,
            'nombre_talento'=> $request->nombre_talento,
            'url_multimedia'=> $request->url_multimedia,
        ]);

        // Obtener el nombre del talento desde la solicitud
        $talento = $request->nombre_talento;

        // Redirigir a la acción correspondiente dentro del controlador
        switch ($talento) {
            case 'Futbol':
                return $this->futbol($request);
                break;
            case 'Canto':
                return $this->canto($request);
                break;
            case 'Danza':
                return $this->danza($request);
                break;
            case 'Arte':
                return $this->arte($request);
                break;
            // default:
            //     // Si no coincide con ningún tipo conocido, puedes redirigir a una vista predeterminada o lanzar un error
            //     return redirect()->route('categories.default');
            //     break;
        }
    }


    public function destroy($idusers){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/users/' . $idusers);
        return redirect()->route('categories.futbol');
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
}
