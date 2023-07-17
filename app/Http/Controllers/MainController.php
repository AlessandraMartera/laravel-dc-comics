<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index(){

        $comics = Comic :: all();

        return view('home', compact('comics'));
    }

    public function show($id){

        $comic = Comic :: findOrFail($id);

        return view('show',compact('comic'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $comics = $request -> all();
        $comic = Comic::create([
            "title" => $comics["title"],
            "description" => $comics["description"],
            "thumb" => $comics["thumb"],
            "price" => $comics["price"],
            "series" => $comics["series"],
            "sale_date" => $comics["sale_date"],
            "type" => $comics["type"],

        ]);
        // return view('store');
        return redirect()-> route('home');
    }
}
