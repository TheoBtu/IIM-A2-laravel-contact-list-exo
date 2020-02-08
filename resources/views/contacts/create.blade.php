@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <!-- TODO mise en place de la form pour créer un contact -->
                <form action="{{route('contact.post')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label> Nom </label>
                        <input name="name" type="text" required
                               class="form-control @error('name') is-invalid @enderror" id="name"
                               placeholder="Entrer votre nom"
                               value="{{  old('name', "") }}"
                        >
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label> Téléphone </label>
                        <input name="tel" type="number" required
                               class="form-control @error('tel') is-invalid @enderror" id="tel"
                               placeholder="Entrer votre numéro de téléphone"
                               value="{{  old('tel', "") }}"
                        >
                        @error('tel')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label> Email </label>
                        <input name="email" type="email" required
                               class="form-control @error('email') is-invalid @enderror" id="email"
                               placeholder="Entrer votre email"
                               value="{{  old('email', "") }}"
                        >
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
