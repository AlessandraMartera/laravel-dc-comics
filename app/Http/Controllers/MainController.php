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
        $comics = $request -> validate(
            $this -> validationRules(),
            $this -> validationErrors()
        );

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

        $data = $request -> validate(
            $this -> validationRules(),
            $this -> validationErrors()
        );;

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

    private function validationRules(){
        return [
            "title" => 'required|max:50',
            "description" => 'required',
            "thumb" => 'required',
            "price" => 'required',
            "series" => 'required',
            "sale_date" => 'required|date',
            "type" => 'required'
        ];
    }

    private function validationErrors(){
        return[
            "title.required" =>"inserire un titolo",
            "description.required" =>"inserire un descrizione",
            "thumb.required" =>"inserire un path di un immagine",
            "price.required" =>"inserire il prezzo",
            "series.required" =>"inserire un inserire la serie di fummetti",
            "sale_date.required" =>"inserire la data di uscita",
            "type.required" => "inserire il tipo",
        ];
    }

}
