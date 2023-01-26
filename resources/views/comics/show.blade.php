<div class="container">
    <h1>{{ $comic->title }} #{{ $comic->id }}</h1>
    <ul>
      <li><strong>Descrizione:</strong> {{ $comic->description }}</li>
      <li><strong>Prezzo:</strong> {{ $comic->price }}</li>
      <li><strong>Serie:</strong> {{ $comic->series }}</li>
      <li><strong>Tipo:</strong> {{ $comic->type }}</li>
    </ul>
</div>