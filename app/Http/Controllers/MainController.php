<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    // function index
    public function index(){
        $comics = Comic :: all();
        return view('home', compact('comics'));
    }

    // function show
    public function show($id){
        $comic = Comic :: findOrFail($id);
        return view('show',compact('comic'));
    }

    // function create and store
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

    // function edit and update
    public function edit($id) {

        $comic = Comic :: findOrFail($id);

        return view('edit', compact("comic"));
    }

    public function update(Request $request, $id) {

        $data = $request -> all();

        $comic = Comic :: findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('show', $comic -> id);
    }

    // function delete
    public function delete($id) {

        $comic = Comic :: findOrFail($id);

        $comic -> delete();

        return redirect() -> route('home');
    }

}
