<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Database\Seeders\ComicTableSeeder;
use Illuminate\Support\Facades\Validator;
class ComicController extends Controller
{
    private $validationRules = [
        "title" => "required|min:5|max:255",
        "description" => "required|string",
        "price" => "required|decimal:2",
        "series" => "required|string",
        "type" => "string"
    ];

    public function index() {
        $comics = Comic::all();
        return view("comics.index", compact('comics'));
    }

    /**Show the form for creating a new resource.*/
    public function create()
    {
        // $data = $request->validated();

        return view("comics.create");
    }

    public function store(StorePostRequest $request) {
        $data = $request->validated();

        $comic = Comic::create($data);

        return redirect()->route("comics.show", $comic->id)->with([
            "status" => "success",
            "message" => "Creato elemento con ID " . $comic->id
        ]);
    }

    // /** Store a newly created resource in storage.*/
    // public function store(Request $request)
    // {
    //     $data = $request->all();

    //     $comic = new comic();
    //     $comic->title = $data["title"];
    //     $comic->description = $data["description"];
    //     $comic->price = $data["price"];
    //     $comic->series = $data["series"];
    //     $comic->type = $data["type"];
    //     $comic->save();

    //     return redirect()->route("comics.show", $comic->id);
    // }

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
    public function update(UpdatePostRequest $request, Comic $comic) {
        $data = $request->validated();
        $data["public"] = key_exists("public", $data) ? true : false;

        $comic->update($data);
        // devo reindirizzare l'utente ad una pagina in GET
        return redirect()->route("comics.show", $comic->id)->with([
            "status" => "success",
            "message" => "Elemento modificato con successo"
        ]);
    }

    /** Remove the specified resource from storage. */
    public function destroy($id) {
        $comic = Comic::findOrFail($id);

        // sull'istanza del model, il metodo da usare ?? delete()
        $comic->delete();

        // Un volta eliminato l'elemento dalla tabella, dobbiamo reindirizzare l'utente da qualche parte.
        return redirect()->route("comics.index");
    }

    private function validation($data) {
        $result = Validator::make($data, $this->validationRules, [
            "title.required" => "Il titolo ?? obbligatorio",
            "title.min" =>  "Il titolo deve avere almeno :min caratteri",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "La descrizione ?? obbligatoria",
            "price.required" => "Il prezzo ?? obbligatorio",
            "price.decimal:2" => "Il prezzo pu?? avere al massimo 2 decimali",
            "series.required" => "La serie ?? obbligatoria",
        ])->validate();

        return $result;
    }
}
