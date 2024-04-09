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

}
