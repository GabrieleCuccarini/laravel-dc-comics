<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" name="series">
        </div>    
        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type">
        </div> 
        
        <button class="btn btn-primary" type="submit">Salva prodotto</button>
    </form>
</div>
