<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text"
            class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror"
            name="title" value="{{ $errors->has('title') ? '' : old('title') }}">
{{--     
        @error('title')
            <div class="invalid-feedback">
                <b>{{ $message }} </b>
            </div>
        @enderror
        </div> --}}

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <input type="text"
            class="form-control @error('description') is-invalid @elseif(old('description')) is-valid @enderror"
            name="description" value="{{ $errors->has('description') ? '' : old('description') }}">
    
        {{-- @error('description')
            <div class="invalid-feedback">
                <b>{{ $message }} </b>
            </div>
        @enderror
        </div> --}}

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input type="float"
            class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror"
            name="price" value="{{ $errors->has('price') ? '' : old('price') }}">
    
        {{-- @error('price')
            <div class="invalid-feedback">
                <b>{{ $message }} </b>
            </div>
        @enderror
        </div> --}}

        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input type="text"
            class="form-control @error('series') is-invalid @elseif(old('series')) is-valid @enderror"
            name="series" value="{{ $errors->has('series') ? '' : old('series') }}">
    
        {{-- @error('series')
            <div class="invalid-feedback">
                <b>{{ $message }} </b>
            </div>
        @enderror --}}
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input type="text"
            class="form-control @error('type') is-invalid @elseif(old('type')) is-valid @enderror"
            name="type" value="{{ $errors->has('type') ? '' : old('type') }}">
    
        {{-- @error('type')
            <div class="invalid-feedback">
              <b>{{ $message }} </b>
            </div>
        @enderror --}}
        </div>

        <button class="btn btn-primary" type="submit">Salva prodotto</button>
        
        {{--CHECK DEGLI ERRORI COMPLESSIVO  --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <b>Hai commesso degli errori nella compilazione dei campi:</b>
                    @error('title')<li class="invalid-feedback">{{ $message }}</li> @enderror
                    @error('description')<li class="invalid-feedback">{{ $message }}</li> @enderror
                    @error('price')<li class="invalid-feedback">{{ $message }}</li> @enderror
                    @error('series')<li class="invalid-feedback">{{ $message }}</li> @enderror
                    @error('type')<li class="invalid-feedback">{{ $message }}</li> @enderror    
                </ul>

            </div>  
        @else
            
        @endif
    </form>
</div>
