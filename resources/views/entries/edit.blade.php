@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Nuevas Entradas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('entries.update',$entry->id)}}" method="POST">
                        @method('PATCH') 
                        @csrf
                        <div class="form-group ">
                            <label for="titulo" class="">Titulo</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo',$entry->titulo) }}" required autocomplete="titulo" autofocus>

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="contenido" class="">Contenido</label>

                            <div class="">
                                <textarea id="contenido" class="form-control @error('contenido') is-invalid @enderror" name="contenido"  required >{{ old('contenido',$entry->contenido) }}</textarea>
                                @error('contenido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                   Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
