<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>Index</title>
</head>

<body>

<div class="container w90 m5-auto mt-3">
  <h1 class="d-flex justify-content-between">
      Lista prodotti

      <a href="{{ route('comics.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        Aggiungi
      </a>
    </h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrizione</th>
          <th>Prezzo</th>
          <th>Serie</th>
          <th>Tipo</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <td>{{ $comic['title'] }}</td>
            <td>{{ $comic->description }}</td>
            <td>€ {{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->type }}</td>
            <td class="d-flex">
              <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-link">
                <i class="fas fa-eye"></i>
              </a>

              <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-link">
                <i class="fa-solid fa-pencil"></i>      
              </a>

              <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" 
                  class="delete-form d-inline-block">
                  @csrf()
                  @method('delete')

                  <button class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                  </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>  
  </div>
</body>  

</html>

<script>
  const forms = document.querySelectorAll(".delete-form");
  forms.forEach((form) => {
    form.addEventListener("submit", function(e) {
      e.preventDefault();
      const confirm = confirm("Check: sei sicuro");
      if (confirm === true) {
        form.submit();
      }
    })
  })
</script>

<style>
.m5-auto {
  margin: 2rem auto;
}

.w90 {
  min-width: 90vw;
}

</style>