<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;
use Database\Seeders\ComicTableSeeder;
class ComicController extends Controller
{

    public function index() {
        $comics = Comic::all();
        return view("comics.index", compact('comics'));
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
        $comic = Comic::find($id);

        if (!$comic) {
            abort(406, "Comic non trovato, prova a cercare un altro id");
        }

        return view("comics.edit", [
            "comic" => $comic
        ]);
    }

    /** Update the specified resource in storage.*/
    public function update(Request $request, $id) {
        $data = $request->all();

        $comic = Comic::findOrFail($id);
        // Assegna i valori come il fill e poi esegue il save();
        $comic->update($data);

        // devo reindirizzare l'utente ad una pagina in GET
        return redirect()->route("comics.show", $comic->id);
    }

    /** Remove the specified resource from storage. */
    public function destroy($id) {
        $comic = Comic::findOrFail($id);

        // sull'istanza del model, il metodo da usare è delete()
        $comic->delete();

        // Un volta eliminato l'elemento dalla tabella, dobbiamo reindirizzare l'utente da qualche parte.
        return redirect()->route("comics.index");
    }
}
