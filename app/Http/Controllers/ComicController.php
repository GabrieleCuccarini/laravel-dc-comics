<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index() {
        $comics = Comic::all();
        dd($comics);
    }

    /**Show the form for creating a new resource.*/
    public function create()
    {
        return view("comics.create");
    }

    /** Store a newly created resource in storage.*/
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new comic();
        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->price = (float) $data["price"];
        $comic->series = $data["series"];
        $comic->type = $data["type"];
        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }

    /** Display the specified resource.*/
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /** Show the form for editing the specified resource. */
    public function edit($id)
    {
        //
    }

    /** Update the specified resource in storage.*/
    public function update(Request $request, $id)
    {
        //
    }

    /** Remove the specified resource from storage. */
    public function destroy($id)
    {
        //
    }
}
