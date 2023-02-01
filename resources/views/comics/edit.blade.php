<h1>Modifica Comic #{{ $comic->id }}</h1>

<form action="{{ route('comics.update', $comic->id) }}" method="POST">
  @csrf

  @method('put')

  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $comic->title) }}">
      @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Descrizione</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $comic->description) }}">
      @error('description')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
  </div>
  
  <div class="mb-3">
    <label class="form-label">Prezzo</label>
    <input type="number" step=".01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $comic->price) }}">
    @error('price')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>
  
  <div class="mb-3">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type', $comic->type) }}">
      @error('type')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
  </div>
  
  <div class="mb-3">
    <label class="form-label">Serie</label>
    <input type="series" class="form-control @error('series') is-invalid @enderror" name="series" value="{{ old('series', $comic->series) }}">
    @error('series')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <button class="btn btn-primary" type="submit">Salva prodotto</button>
</form>