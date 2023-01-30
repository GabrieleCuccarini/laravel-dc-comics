<h1>Modifica Comic #{{ $comic->id }}</h1>

<form action="{{ route('comics.update', $comic->id) }}" method="POST">
  @csrf

  @method('put')

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" value="{{ $comic->title }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Descrizione</label>
    <input type="text" class="form-control" name="description" value="{{ $comic->description }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Prezzo</label>
    <input type="number" step=".01" class="form-control" name="price" value="{{ $comic->price }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control" name="type" value="{{ $comic->type}}">
  </div>
  <div class="mb-3">
        <label class="form-label">Serie</label>
        <input type="text" class="form-control" name="serie" value="{{ $comic->series}}">
  </div>

  <button class="btn btn-primary" type="submit">Salva prodotto</button>
</form>